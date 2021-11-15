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
        return view('admin.layouts.manage_product');
    }

    public function add_product(){
        return view('admin.button.add_product');
    }
    // public function addProductForm(Request $request){
    //     AddProduct::create([
    //         'id'=>$request->input('id'),
    //         'name'=>$request->input('name'),
    //         'product_model'=>$request->input('product_model'),
    //         'product_type'=>$request->input('product_type'),
    //     ]);
    //     return redirect()->back();
    // }
}
