<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessoryOrderController extends Controller
{
    
    public function accessoryOrderTable()
    {
        return view('admin.layouts.tables.manage_accessory_order');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
}
