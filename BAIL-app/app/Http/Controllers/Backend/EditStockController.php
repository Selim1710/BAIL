<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use App\Models\ManageOrder;
use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class EditStockController extends Controller
{

    public function index()
    {
        $stocks =   Stock::with('product')->get();
        return view('admin.layouts.tables.manage_stock', compact('stocks'));
    }
    public function create()
    {
        // $products = AddProduct::sum('total_produce');
        // dd($products);
        $products = AddProduct::with('stock')->get();
        return view('admin.layouts.forms.add_stock', compact('products'));
    }

    public function store(Request $request){
        Stock::create([
            'product_id'=>$request->product_id,
            'quantity'=>$request->total_produce,
        ]);
        return redirect()->route('stock.index');
    }
}
