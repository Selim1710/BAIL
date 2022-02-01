<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccessoryStock;
use App\Models\AddAccessory;
use Illuminate\Http\Request;

class AddAccessoryStockController extends Controller
{

    public function accessoryStockTable()
    {
        $stocks = AccessoryStock::with('addAccessory')->get();
        return view('admin.layouts.tables.accessory_stock_table', compact('stocks'));
    }


    public function addAccessoriesStock()
    {
        $stocks = AddAccessory::with('accessoryStock')->get();
        return view('admin.layouts.forms.add_accessories_stock', compact('stocks'));
    }


    public function store(Request $request)
    {        
        AccessoryStock::create([
            "accessories_id" => $request->accessories_id,
            "total_produce" => $request->total_produce,
        ]);
        return redirect()->route('accessorires.stock.table')->with('message','Accessories Added');
    }

    
}
