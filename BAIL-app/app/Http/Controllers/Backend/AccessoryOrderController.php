<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccessoryOrder;
use Illuminate\Http\Request;

class AccessoryOrderController extends Controller
{
    
    public function accessoryOrderTable()
    {
        $accessories = AccessoryOrder::orderBy('id','DESC')->cursorPaginate(5);
        return view('admin.layouts.tables.manage_accessory_order',compact('accessories'));
    }

    
    public function remove($id)
    {
        $accessories = AccessoryOrder::find($id);
        $accessories->delete();
        return redirect()->route('admin.manage.accessory.order')->with('error','Order Removed');
    }

    
    public function confirmOrder($id)
    {
        $accessories = AccessoryOrder::find($id);
        $accessories->update([
            'status'=>'confirmed',
        ]);
        return redirect()->route('admin.manage.accessory.order')->with('message','Order Confirmed');

    }

    
}
