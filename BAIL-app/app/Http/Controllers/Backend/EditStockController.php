<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use Illuminate\Http\Request;
use App\Models\Stock;

class EditStockController extends Controller
{
    
    public function index()
    {
        $stocks=Stock::class::with('Product')->get();
        $products = AddProduct::all();
        return view('admin.layouts.tables.manage_stock',compact('products','stocks'));
        
    }

}
