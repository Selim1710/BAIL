<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ManageOrder;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{

    public function index()
    {
        $orders = ManageOrder::all();
        return view('admin.layouts.tables.manage_order', compact('orders'));
    }

    public function confirmOrder($id)
    {
        $order = ManageOrder::find($id);
        $order->update([
            'status'=>'confirmed',
        ]);
        return redirect()->back()->with('message','Order Confirmed');
    }

    public function removeOrder($id){
        $order=ManageOrder::find($id);
        $order->delete();
        return redirect()->back()->with('error', 'Order Removed');
    } 
}
