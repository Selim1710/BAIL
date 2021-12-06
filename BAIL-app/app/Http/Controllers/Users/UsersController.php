<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home(){
        $products = AddProduct::all();
        return view('users.layouts.home',compact('products'));
    }
    public function productUser(){
        return view('users.layouts.product');
    }
    public function accessoriesUser(){
        return view('users.layouts.accessories');
    }
}
