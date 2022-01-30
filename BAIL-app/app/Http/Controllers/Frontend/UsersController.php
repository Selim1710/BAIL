<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        return view('website.pages.login');
    }


    public function create()
    {
        return view('website.pages.registration_form');
    }


    public function store(Request $request)
    {
        try{
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
            return redirect('website/user/login');
        }catch(\Throwable $throw){
            return redirect()->route('users.registration.create')->with('message','Email Already Taken');
        }
    }

    public function doLogin(Request $request)
    {
        try{  
        $userpost = $request->except('_token');
        if (Auth::attempt($userpost)) {

            return redirect()->route('website.index');
            
        } else {
            return redirect()->back()->with('error','Invalid Username Or Password');
        }
        }catch(\Throwable $throw){
            return redirect()->route('users.login')->with('error','Invalid Username Or Password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('website.index');
    }
}
