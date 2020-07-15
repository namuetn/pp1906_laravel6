<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderByRaw('created_at - updated_at DESC')->get();
        return view('admin.orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $order = Order::findOrFail($id);
    //     // $categories = Category::all();
    //     $data = [
    //         'order' => $order,
    //         // 'categories' => $categories,
    //     ];

    //     return view('admin.orders.edit', $data);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $data = $request->only([
    //         'name',
    //         'content',
    //         'quantity',
    //         'price',    
    //         'image',
    //         'category_id'
    //     ]);

    //     $order = order::findOrFail($id);

    //     try {
    //         $order->update($data);
    //     } catch (\Exception $e) {
    //         \Log::error($e);

    //         return back()->with('status', 'Update faild.');
    //     }

    //     return redirect('admin/orders/')->with('status', 'Update success.'); 
    // }

    public function show($id)
    {
        $orders = Order::findOrFail($id);
        $data = ['orders' => $orders];
        // $data = compact('product');
        return view('admin.orders.detail', $data);
    }
}
