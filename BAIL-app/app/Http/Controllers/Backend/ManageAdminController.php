<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use Illuminate\Http\Request;
use App\Models\ProductAdd;

class ManageAdminController extends Controller
{
    public function admin()
    {
        $products=AddProduct::all();
        return view('admin.layouts.manage_product',[
            'products'=>$products
        ]);
    }

    public function add_product(){
        return view('admin.button.add_product');

    }
    public function addProductForm(Request $request){
        AddProduct::create([
            'product_model'=>$request->input('product_model'),
            'name'=>$request->input('name'),
            'fuel_type'=>$request->input('fuel_type'),
            'cubic_capacity'=>$request->input('cubic_capacity'),
            'number_of_seats'=>$request->input('number_of_seats'),
            'color'=>$request->input('color')
        ]);
        return redirect('/ManageProduct');
    }
}
