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
        // dd('selim');
        return view('website.pages.login');
    }

    
    public function create()
    {
        return view('website.pages.registration_form');
    }

    
    public function store(Request $request)
    {
        // dd($request->user_email);
        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt( $request->input('password')),
        ]);
        return redirect('website/user/login');
    }

    public function doLogin(Request $request)
    {
        // dd($request->all());
        $userpost = $request->except('_token');
        if (Auth::attempt($userpost)) {
            return redirect()->route('website.index');
        } else {
            return redirect()->back('');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('website.index');
    }
    
}
