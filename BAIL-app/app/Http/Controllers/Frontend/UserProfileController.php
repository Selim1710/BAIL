<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ManageOrder;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    
    public function index()
    {
        $carts=session()->get('cart');
        $orders=ManageOrder::all();
        return view('website.pages.user_profile',compact('carts','orders'));
    }

}
