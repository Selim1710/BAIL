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
        $orders=ManageOrder::all();
        foreach($stocks as $stock){
            $stock->total_produce;
            foreach($orders as $order){
                $order->quantity;
            }
        }
        Stock::create([
            'name'=>$stock->name,
            'product_type'=>$stock->product_type,
            'total_produce'=>$stock->total_produce,
            'total_order'=>$order->quantity,
            'current_stock'=> (int)$stock['total_produce']-(int)$order['quantity'],

        ]);

        $currentStocks =Stock::all();
        return view('admin.layouts.tables.manage_stock',compact('currentStocks'));
        
    }


}
