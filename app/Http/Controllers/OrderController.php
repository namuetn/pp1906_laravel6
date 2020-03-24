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
    
    public function storeOneProduct(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity;
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
                $productOrder->increment('quantity', $quantity);
            } else {
                $product->orders()->attach($order->id, ['quantity' => $quantity, 'price' => $product->price]);
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
    *   @param App\Models\Order $order
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

        $updateFlag = true;
        $currentUser = auth()->user();
        $productId = $request->product_id;
        $quantity = $request->quantity;
        $order = $currentUser->orders()->where('status', 1)->first();

        try {
            $order->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
            $totalPrice = $this->totalPrice($order);
            $order->update(['total_price' => $totalPrice]);
        } catch (\Exception $e) {
            \Log::error($e);
            $updateFlag = false;
        }

        return response()->json([
            'status' => $updateFlag,
            'total_price' => $totalPrice,
            'quantity' => $order->products->sum('pivot.quantity'),
        ]);

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
            $result = ['status' => $deleteFlag,];
        }

        $result = [
            'status' => $deleteFlag,
            'quantity' => $order->products->sum('pivot.quantity'),
            'total_price' => $totalPrice,
        ];

        return response()->json($result);
    }
 }
