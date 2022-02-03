<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AccessoryOrder;
use App\Models\AddAccessory;
use App\Models\AddProduct;
use App\Models\ManageOrder;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $products = AddProduct::all()->count();
        $orders = ManageOrder::sum('quantity');
        $arrears = ManageOrder::where('status','confirmed')->sum('total_price');

        $accessories = AddAccessory::all()->count();
        $accessoryOrder = AccessoryOrder::where('status','confirmed')->sum('quantity');
        $accessoryArrears = AccessoryOrder::where('status','confirmed')->sum('total_price');

        $customers = User::where('role','user')->count();



        return view('admin.layouts.home',compact('customers','products','orders','accessories','accessoryOrder','accessoryArrears','arrears'));
    }
}
