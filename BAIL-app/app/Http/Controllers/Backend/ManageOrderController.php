<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ManageOrder;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{

    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search!=""){
            $orders = ManageOrder::where('product_name', 'LIKE',"%$search%")->orwhere('product_type', 'LIKE',"%$search%")->cursorPaginate(5);
        }else{
            $orders = ManageOrder::orderBy('id','DESC')->cursorPaginate(5);
        }
        return view('admin.layouts.tables.manage_order', compact('orders','search'));
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
