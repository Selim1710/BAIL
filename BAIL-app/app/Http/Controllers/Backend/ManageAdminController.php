<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageAdminController extends Controller
{
    public function admin()
    {
        return view('admin.layouts.manage_admin');
    }

    public function add(){
        return view('admin.layouts.add_admin');
    }
}
