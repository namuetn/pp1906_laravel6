<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{   
    /**
     * Store a newly created resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productId = $request->product_id;
        $product = Product::findOrFail($productId);
        $currentUserId = auth()->id();

        $orderData = [
            'user_id' => $currentUserId,
            'total_price' => $product->price,
            'description' => 'abc',
        ];
        $order = Order::where('user_id', $currentUserId)->where('status', 1)->first(); 
        
        try {
            if (is_null($order)) {
                $order = Order::create($orderData);
            }

            $productOrder = ProductOrder::where('order_id', $order->id)
                ->where('product_id', $product->id)
                ->first();

            if ($productOrder) {
                $productOrder->increment('quantity', 1);
            } else {
                $product->orders()->attach($order->id, ['quantity' => 1, 'price' => $product->price]);
            }

            $totalPrice = $this->totalPrice($order);
            $order->update(['total_price' => $totalPrice]);  
        } catch (\Exception $e) {
            \Log::error($e);

            $result = [
                'status' => false,
                'quantity' => 0,
            ];

            return response()->json($result);
        }

        $result = [
            'status' => true,
            'quantity' => $order->products->sum('pivot.quantity'),
        ];

        return response()->json($result);
    }
    
    /** 
    *   Caculater 
    *   @param App\Models|Order $order
    *   
    */
    public function totalPrice($order)
    {
        $totalPrice = 0;

        foreach($order->products as $product) {
            $totalPrice += $product->price * $product->pivot->quantity;
        }

        return $totalPrice;
    }


    public function showCart() 
    {
        $currentUser = auth()->user();
        $order = $currentUser->orders->where('status', 1)->first();

        return view('orders.show', compact('order'));
    }

    /**
    *   Destroy a product in order
    *   return void 
    */
    public function updateCart(Request $request)
    {
        $quantityNumber = $request->quantity;
        $currentUserId = auth()->id();
        $order = Order::where('user_id', $currentUserId)->where('status', 1)->first(); 

        try {
            $productOrder = ProductOrder::where('order_id', $order->id)->where('quantity', $quantityNumber)->first();  

            $productOrder->update(['quantity' => $quantityNumber]);
            
            $totalPrice = $this->totalPrice($order);
            $order->update(['total_price' => $totalPrice]);
        } catch (\Exception $e) {
           \Log::error($e); 

           return back()->withInput($data)->with('status', 'Update failed!'); 
        }

        return redirect('/carts')->with('status', 'Create success');
    }

    public function destroyProduct(Request $request) 
    {
        $deleteFlag = true;

        $productId = $request->product_id;
        $currentUser = auth()->user();
        $order  = $currentUser->orders->where('status', 1)->first();

        try {
            $order->products()->detach($productId);

            $totalPrice = $this->totalPrice($order);
            $order->update(['total_price' => $totalPrice]);  
        } catch (\Exception $e) {
            \Log::error($e);

            $deleteFlag = false;
        }

        return response()->json(['status' => $deleteFlag, 'total_price' => $totalPrice]);
    }
 }
