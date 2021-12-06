<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddProduct;


class EditProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = AddProduct::all();
        return view('admin.layouts.tables.manage_product', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.forms.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // dd($request->all());
        $request->validate([
            'product_model' => 'required',
            'name' => 'required',
            'product_type' => 'required',
            'product_details' => 'required',
            // 'opening_stock'=>'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);

    //  we concatenate(.) uniqid with the file name
        $filename = '';
        if ($request->hasfile('image_path')) {
            $file = $request->file('image_path');
            $filename =date('Ymdmhs'). '.' . $file->getClientOriginalExtension();
            // dd($filename);
            // $file->move(public_path('images/product'), $filename);
            $file->storeAs('/uploads/product',$filename);
        }

        try {
            AddProduct::create([
                'product_model' => $request->input('product_model'),
                'name' => $request->input('name'),
                'product_type' => $request->input('product_type'),
                'product_details' => $request->input('product_details'),
                // 'opening_stock' => $request->input('opening_stock'),
                'image_path' => $filename,
            ]);
            return redirect('/admin/product');
        } catch (\Throwable $throw) {
            return redirect('/admin/product');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $products=AddProduct::findOrFail($id);
        //->first()
        return view('admin.layouts.forms.edit_product',[
            'products'=>$products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $products=AddProduct::findOrFail($request->id);
         $products->product_model = $request->product_model;
         $products->name = $request->name;
         $products->product_type = $request->product_type;
         $products->product_details = $request->product_details;
        //  $products->opening_stock = $request->opening_stock;
         $products->image_path = $request->image_path;

         $products->save();

         return redirect('/admin/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = AddProduct::findOrFail($id);
        $products->delete();
        return redirect('/admin/product');
    }
}
