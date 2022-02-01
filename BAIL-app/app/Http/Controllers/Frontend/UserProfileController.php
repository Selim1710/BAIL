<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AccessoryOrder;
use App\Models\ManageOrder;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    
    public function userProfile()
    {
        $carts=session()->get('cart');
        $cartA=session()->get('cartA');
        $orders=ManageOrder::all();
        $accessories=AccessoryOrder::all();
        return view('website.pages.user_profile',compact('carts','orders','accessories','cartA'));
    }
    public function editProfile($id){
        $users=User::find($id);
        return view('website.pages.edit_profile',compact('users'));
    }

    public function updateProfile(Request $request, $id){
        $users=User::find($id);
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('user.profile')->with('message','Your Profile is Updated');
    }

    public function uploadImage($id){
        dd($id);
    }

}
