<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use App\Models\ManageOrder;
use Illuminate\Http\Request;
use App\Models\Stock;

class EditStockController extends Controller
{
    
    public function index()
    {
        $stocks = AddProduct::with('stock')->get();
        return view('admin.layouts.tables.manage_stock',compact('stocks'));
        
    }

}
