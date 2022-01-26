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
            $products = AddProduct::where('name', 'LIKE', "%$search%")->orwhere('product_type', 'LIKE', "%$search%")->get();
            $accessories = AddAccessory::where('name', 'LIKE', "%$search")->orwhere('accessories_type', 'LIKE', "%$search%")->get();
            

        } else {
            $products = AddProduct::all();
            $accessories = AddAccessory::all();
        }
        return view('website.layouts.home', compact('products', 'accessories', 'search'));
    }
}
