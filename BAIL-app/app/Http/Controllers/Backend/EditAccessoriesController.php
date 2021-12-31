<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use Illuminate\Http\Request;

class EditAccessoriesController extends Controller
{
    
    public function index(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search != ""){
            $accessories=AddAccessory::where("name", 'LIKE', "%$search%")->get();
        }else{
            $accessories=AddAccessory::all();
        }
        return view('admin.layouts.tables.manage_accessories',compact('accessories','search'));
    }

    
    public function create()
    {
        return view('admin.layouts.forms.add_accessories');
    }

    
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'accessories_model'=>'required',
            'name'=>'required',
            'accessories_type'=>'required',
            'accessories_details'=>'required',
            'accessories_price'=>'required',
            'acc_img'=>'required',
        ]);

        $accessories='';
        if($request->hasfile('acc_img')){
            $accessory = $request->file('acc_img');
            $accessories=date('Ymdhms') . '.' . $accessory->getClientOriginalExtension();
            $accessory->storeAs('/uploads/accessories',$accessories);
            
        }

        AddAccessory::create([
            'accessories_model'=> $request ->input('accessories_model'),
            'name'=> $request ->input('name'),
            'accessories_type'=> $request ->input('accessories_type'),
            'accessories_details'=> $request ->input('accessories_details'),
            'accessories_price'=> $request ->input('accessories_price'),
            'acc_img'=> $accessories

        ]);
        return redirect('/admin/accessories');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $accessories=AddAccessory::findOrFail($id);
        return view('admin.layouts.forms.edit_accessories',compact('accessories'));
    }

    
    public function update(Request $request)
    {
        $accessories=AddAccessory::find($request->id);
        // dd($accessories);
        $accessories->accessories_model = $request->accessories_model;
        $accessories->name = $request->name;
        $accessories->accessories_type = $request->accessories_type;
        $accessories->accessories_details = $request->accessories_details;
        $accessories->acc_img = $request->acc_img;
        $accessories->accessories_price = $request->accessories_price;

        

        $accessories->save();
        return redirect('/admin/accessories');

    }

   
    public function destroy($id)
    {
        // dd($id);
        $accessories=AddAccessory::findOrFail($id);
        $accessories->delete();
        return redirect('/admin/accessories');
        
    }
}
