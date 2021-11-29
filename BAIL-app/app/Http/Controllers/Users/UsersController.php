<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home(){
        return view('users.layouts.home');
    }
    public function productUser(){
        return view('users.layouts.product');
    }
    public function accessoriesUser(){
        return view('users.layouts.accessories');
    }
}
