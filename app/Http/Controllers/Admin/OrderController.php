<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
// use App\Http\Requests\orderRequest;
use Illuminate\Support\Facades\Auth;


class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'user_id',
            'total_price',
            'description',
        ]);

        $data['user_id'] = Auth::id();

        try {
            $order = Order::create($data);
        } catch (\Exception $e) {
           \Log::error($e);

           return back()->withInput($data)->with('status', 'Create failed!'); 

        }

        return redirect('admin/orders/' . $order->id)->with('status', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $data = ['order' => $order];
        // $data = compact('order');
        return view('admin.orders.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only([
            'user_id',
            'total_price',
            'description',
        ]);
        $order = Order::findOrFail($id);
        try {
            $order->update($data);    
        } catch (\Exception $e) {
            \Log::error($e);

            return back()->withInput($data)->with('status', 'Update faild');
        }

        return redirect('admin/orders/' . $order->id)->with('status', 'Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        try {
            $order->delete();
        } catch (\Exception $e) {
            \Log::error($e);

            return back()->with('status', 'Delete faild');
        }

        return redirect('admin/orders')->with('status', 'Delete success');
    }
}
