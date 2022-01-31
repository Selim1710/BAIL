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
        $stocks =   Stock::with('product')->orderBy('id', 'DESC')->cursorPaginate(5);
        return view('admin.layouts.tables.manage_stock', compact('stocks'))->with('no',1);
    }
    public function create()
    {
        $products = AddProduct::with('stock')->get();
        return view('admin.layouts.forms.add_stock', compact('products'));
    }

    public function store(Request $request)
    {
        Stock::create([
            'product_id' => $request->product_id,
            'quantity' => $request->total_produce,
        ]);
        return redirect()->route('stock.index')->with('message', 'Product Added into the Stock');
    }

    public function edit($id)
    {
        $stocks = Stock::find($id);
        return view('admin.layouts.forms.edit_stock', compact('stocks'));
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);
        $stock->update([
            'quantity' => $request->quantity,
        ]);
        return redirect()->route('stock.index')->with('message', 'Stock Updated');
    }

    public function remove($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return redirect()->route('stock.index')->with('error', 'Stock Deteted');
    }
}
