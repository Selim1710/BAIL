<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use Illuminate\Http\Request;

class ShowAccessoryController extends Controller
{
   
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $accessories=AddAccessory::where('accessories_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        }else{
            $accessories=AddAccessory::all();
        }
        return view('website.layouts.show_accessories',compact('accessories','search'));
    }

    
    public function orderForm(Request $request, $id)
    {
        $search=$request['search'] ?? "";
        if($search!=""){
            $accessory=AddAccessory::where('accessories_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        }else{
            $accessories=AddAccessory::all();
        }
        $accessory=AddAccessory::findOrFail($id);
        return view('website.layouts.form.accessories_order',compact('accessory','search'));
    }

    
    
    public function view($id)
    {
        // dd($id);
        $accessory=AddAccessory::find($id);
        return view('website.layouts.details.accessories_details',compact('accessory'));
    }
}
