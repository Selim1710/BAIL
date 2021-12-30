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

    
    public function create($id)
    {
        $accessory=AddAccessory::findOrFail($id);
        return view('website.layouts.form.accessories_order',compact('accessory'));
    }

    
    public function store(Request $request)
    {
        //
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
