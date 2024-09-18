<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\notification;
use App\Models\order;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = new order();
        $data['order'] = order::all();
        return view('admin.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['order'] = order::where('id', $id)->first();
        $notification = notification::where('order_id', $id)->where('read_at', '0')->first();
        if ($notification) {

            $notification->update([
                'read_at' => '1',
            ]);
        }
        return view('admin.order.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['order'] = order::where('id', $id)->first();
        return view('admin.order.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $order = order::where('id', $id)->first();
        $order->update([
            'delivery_states' => $request->delivery_status,
            'payment_states' => $request->payment_status,
        ]);
        return redirect()->route('orderadmin.index')->with('success', 'order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = order::where('id', $id)->first();
        $order->delete();
        return redirect()->route('orderadmin.index')->with('success', 'order deleted successfully');
    }
}
