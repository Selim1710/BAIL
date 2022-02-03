<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccessoryOrder;
use App\Models\ManageOrder;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){
        $orders = ManageOrder::cursorPaginate(5);
        $accessoryOrder = AccessoryOrder::all();
        return view('admin.layouts.tables.report',compact('orders','accessoryOrder'));
    }
}
