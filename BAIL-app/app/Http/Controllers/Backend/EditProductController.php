<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddProduct;


class EditProductController extends Controller
{
    
    public function index(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search !=""){
            $products = AddProduct::where('product_model','LIKE',"%$search%")->get();
        }else{
            $products = AddProduct::all();
        }
        return view('admin.layouts.tables.manage_product',compact('products','search'));
    }

    
    public function create()
    {
        return view('admin.layouts.forms.add_product');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product_price' => 'required',
            'product_type' => 'required',
            'product_details' => 'required',
            'total_produce'=>'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|'
        ]);

        //  we concatenate(.) uniqid with the file name
        $filename = '';
        if ($request->hasfile('image_path')) {
            $file = $request->file('image_path');
            $filename = date('Ymdmhs'). '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads/product',$filename);
        }

        try {
            AddProduct::create([
                'name' => $request->input('name'),
                'product_price' => $request->input('product_price'),
                'product_type' => $request->input('product_type'),
                'product_details' => $request->input('product_details'),
                'total_produce' => $request->input('total_produce'),
                'image_path' => $filename,
            ]);
            return redirect('/admin/product');
        } catch (\Throwable $throw) {
            return redirect('/admin/product');
        }
    }

    public function view($id)
    {
        $product=AddProduct::findOrFail($id);
        return view('admin.layouts.tables.view.view_product',compact('product'));
    }

    
    public function edit($id)
    {
        
        $products=AddProduct::findOrFail($id);
        //->first()
        return view('admin.layouts.forms.edit_product',[
            'products'=>$products
        ]);
    }

    
    public function update(Request $request)
    {
         $products=AddProduct::findOrFail($request->id);
         $products->name = $request->name;
         $products->product_price = $request->product_price;
         $products->product_type = $request->product_type;
         $products->product_details = $request->product_details;
         $products->total_produce = $request->total_produce;
         $products->image_path = $request->image_path;

         $products->save();

         return redirect('/admin/product');

    }

    
    public function destroy($id)
    {
        $products = AddProduct::findOrFail($id);
        $products->delete();
        return redirect('/admin/product');
    }
}
