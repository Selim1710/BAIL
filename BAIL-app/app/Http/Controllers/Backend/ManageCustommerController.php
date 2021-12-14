<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ManageCustommerController extends Controller
{
    public function index(){
        $customers=User::all();
        return view('admin.layouts.tables.manage_customer',compact('customers'));
    }
}
