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
        return view('admin.table.manage_product', [
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
        return view('admin.form.add_product');
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
            'product_model'=>'required',
            'name'=>'required',
            'cubic_capacity'=>'required',
            'number_of_seats'=>'required',
            'number_of_seats'=>'required',
            'color'=>'required',
            'image_path' =>'required|mimes:jpg,png,jpeg|max:1024'
        ]);

        //now we will create variable


        if($request->hasfile('image_path')){
            $file = $request->file('image_path');
            $filename=uniqid('photo_',true). '.' .$file->getClientOriginalName();
            $file->move(public_path('images/product'),$filename);
        }
        // $new = time() . '-' . $request->name . '.' . $request->image->extension();

        // $request->image->move(public_path('images'),$new);


            try{
                AddProduct::create([
                    'product_model' => $request->input('product_model'),
                    'name' => $request->input('name'),
                    'fuel_type' => $request->input('fuel_type'),
                    'cubic_capacity' => $request->input('cubic_capacity'),
                    'number_of_seats' => $request->input('number_of_seats'),
                    'color' => $request->input('color'),
                    'image_path' =>$filename
                ]);
                return redirect('/product');
            } catch(\Throwable $throw){
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
        $data = AddProduct::findOrFail($id);
        $data->delete();
        return redirect('/product');
    }
}
