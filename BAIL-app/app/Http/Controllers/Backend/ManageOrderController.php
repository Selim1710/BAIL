<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ManageOrder;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    
    public function index()
    {
        $orders=ManageOrder::all();
        return view('admin.layouts.tables.manage_order',compact('orders'));
    }

   
}
