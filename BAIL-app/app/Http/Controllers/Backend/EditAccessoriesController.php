<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use Illuminate\Http\Request;

class EditAccessoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessories=AddAccessory::all();
        return view('admin.layouts.tables.manage_accessories',compact('accessories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.forms.add_accessories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'accessories_model'=>'required',
            'name'=>'required',
            'accessories_type'=>'required',
            'accessories_details'=>'required',
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
            'acc_img'=> $accessories

        ]);
        return redirect('/admin/accessories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
