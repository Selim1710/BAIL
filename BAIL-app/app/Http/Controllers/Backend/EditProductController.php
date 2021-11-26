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
        //method we can use on request
        //guessExtension()
        //getMimeType()
        //there have different store method:store(),asStore(),storePublic()
        //move()
        //getClientOriginalName()
        //getSize()
        //getError()
        //isValid()



        //we will test that all the method there:
        // $test = $request->file('image')->getError();

        // dd($test);
        //we have set a rules where image will be chacked that it is valid or not

        $request->validate([
            'product_model' => 'required',
            'name' => 'required',
            'product_type' => 'required',
            'product_details' => 'required',
            'opening_stock'=>'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:1024'
        ]);

        //now we will create variable


        if ($request->hasfile('image_path')) {
            $file = $request->file('image_path');
            $filename = uniqid('photo_', true) . '.' . $file->getClientOriginalName();
            $file->move(public_path('images/product'), $filename);
        }
        // $new = time() . '-' . $request->name . '.' . $request->image->extension();

        // $request->image->move(public_path('images/product'),$new);


        try {
            AddProduct::create([
                'product_model' => $request->input('product_model'),
                'name' => $request->input('name'),
                'product_type' => $request->input('product_type'),
                'product_details' => $request->input('product_details'),
                'opening_stock' => $request->input('opening_stock'),
                'image_path' => $filename,
            ]);
            return redirect('/product');
        } catch (\Throwable $throw) {
            return redirect('/product');
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
        //dd($id);
        $products=AddProduct::findOrFail($id);
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
         $products->opening_stock = $request->opening_stock;
         $products->image_path = $request->image_path;

         $products->save();

         return redirect('/product');

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
        return redirect('/product');
    }
}
