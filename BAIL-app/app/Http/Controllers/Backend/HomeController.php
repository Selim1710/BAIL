<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use App\Models\AddProduct;
use App\Models\ManageOrder;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $products = AddProduct::all()->count();
        $accessories = AddAccessory::all()->count();
        $customers = User::where('role','user')->count();
        $orders = ManageOrder::sum('quantity');
        $revenue = ManageOrder::where('status','confirmed')->sum('total_price');

        return view('admin.layouts.home',compact('customers','orders','products','accessories','revenue'));
    }
}
