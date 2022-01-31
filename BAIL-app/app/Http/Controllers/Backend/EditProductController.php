<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddProduct;
use App\Models\ManageOrder;
use App\Models\Stock;

class EditProductController extends Controller
{

    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = AddProduct::where('name', 'LIKE', "%$search%")->get();
            foreach ($products as $product) {
                $product->sold = ManageOrder::where('product_id', $product->id)->sum('quantity');
                $product->stock = Stock::where('product_id', $product->id)->sum('quantity');
            }
        } else {
            $products = AddProduct::orderBy('id','DESC')->cursorPaginate(5);
            foreach ($products as $product) {
                $product->sold = ManageOrder::where('product_id', $product->id)->sum('quantity');
                $product->stock = Stock::where('product_id', $product->id)->sum('quantity');
            }
        }
        return view('admin.layouts.tables.manage_product', compact('products', 'search'));
    }


    public function create()
    {
        return view('admin.layouts.forms.add_product');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_price' => 'required',
            'product_type' => 'required',
            'product_details' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|'
        ]);

        //  we concatenate(.) uniqid with the file name
        $filename = '';
        if ($request->hasfile('image_path')) {
            $file = $request->file('image_path');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads/product', $filename);
        }

        try {
            AddProduct::create([
                'name' => $request->input('name'),
                'product_price' => $request->input('product_price'),
                'product_type' => $request->input('product_type'),
                'product_details' => $request->input('product_details'),
                'image_path' => $filename,
            ]);
            return redirect()->route('product.index')->with('message','Product Added');
        } catch (\Throwable $throw) {
            return redirect()->route('product.index')->with('error','Product is not Added');
        }
    }

    public function view($id)
    {
        $product = AddProduct::findOrFail($id);
        return view('admin.layouts.tables.view.view_product', compact('product'));
    }


    public function edit($id)
    {

        $products = AddProduct::findOrFail($id);
        //->first()
        return view('admin.layouts.forms.edit_product',compact('products'));
    }


    public function update(Request $request, $id)
    {
        //  dd($request->all());
        $filename = '';
        if ($request->hasfile('image_path')) {
            $file = $request->file('image_path');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads/product', $filename);
        }
        AddProduct::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'product_price' => $request->input('product_price'),
                'product_type' => $request->input('product_type'),
                'product_details' => $request->input('product_details'),
                'image_path' => $filename,
            ]);
        return redirect()->route('product.index')->with('message','Product Updated');
    }


    public function destroy($id)
    {
        $products = AddProduct::findOrFail($id);
        $products->delete();
        return redirect()->route('product.index')->with('error','Product Deleted');
    }
}
