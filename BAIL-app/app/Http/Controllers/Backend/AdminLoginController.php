<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function loginForm(){
        return view('admin.loginForm');
    }
    public function adminDoLogin(Request $request){
        $adminPost=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        if (Auth::attempt($adminPost)){
            return redirect()->route('home');
        }
        else
        return redirect()->route('admin.login');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
