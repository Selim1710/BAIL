<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageAdminController extends Controller
{
    public function admin()
    {
        return view('admin.layouts.manage_product');
    }

    public function add_product(){
        return view('admin.layouts.add_product');
    }
}
