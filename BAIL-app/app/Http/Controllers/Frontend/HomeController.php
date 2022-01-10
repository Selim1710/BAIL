<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use App\Models\AddProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = AddProduct::where('product_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
            $accessories = AddAccessory::where('accessories_model', 'LIKE', "%$search")->orwhere('name', 'LIKE', "%$search%")->get();
            

        } else {
            $products = AddProduct::all();
            $accessories = AddAccessory::all();
        }
        return view('website.layouts.home', compact('products', 'accessories', 'search'));
    }
}
