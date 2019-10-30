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
    
}
