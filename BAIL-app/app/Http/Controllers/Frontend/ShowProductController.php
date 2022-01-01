<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    
    public function index(Request $request)
    {
        $search=$request['search'] ?? "";
        if($request != ""){
            $products=AddProduct::where('product_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        }else{
            $products=AddProduct::all();
        }
        return view('website.layouts.show_product', compact('products','search'));
    }

    public function view($id)
    {
        $product=AddProduct::find($id);
        return view('website.layouts.details.product_details',compact('product'));
    }

    public function create($id)
    {
        $products=AddProduct::findOrFail($id);
        return view('website.layouts.form.product_order',compact('products'));
    }
}