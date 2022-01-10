<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use Illuminate\Http\Request;


class ShowProductController extends Controller
{

    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($request != "") {
            $products = AddProduct::where('product_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        } else {
            $products = AddProduct::all();
        }
        return view('website.layouts.show_product', compact('products', 'search'));
    }

    public function view(Request $request, $id)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $product = AddProduct::find($id);
        } else {
            $product = AddProduct::find($id);
        }

        return view('website.layouts.details.product_details', compact('product', 'search'));
    }

    public function orderForm(Request $request, $id)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = AddProduct::where('product_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        } else {
            $products = AddProduct::all();
        }
        $products = AddProduct::findOrFail($id);
        return view('website.layouts.form.product_order', compact('products', 'search'));
    }

    public function addToCart($id)
    {

        // dd($id);

        //Case-1: if there is no product in the cart. first time user adding product into the cart
        // Action: add to cart

        $products=AddProduct::find($id);

        if(!$products){
            return redirect()->back()->with('error','Product is not availabe into the card');
        }

        $cartExist=session()->get('cart');
        if( ! $cartExist){
            $cartData=[
                $id=>[
                    'product_id'=>$id,
                    'product_name'=>$products->name,
                    'product_price'=>$products->product_price,
                    'product_quantity'=>1, 
                ]
                ];

            session()->put('cart',$cartData);
            return redirect()->back()->with('message', 'Product added into cart');
        }


        //case-2: if one product is alreadey available into the cart but user want to add another cart
        // Action: add different product with quantity 1

        if( ! isset($cartExist[$id])){
            $cartExist[$id]=[
                'product_id'=>$id,
                'product_name'=>$products->name,
                'product_price'=>$products->product_price,
                'product_quantity'=>1, 
            ];

            session()->put('cart',$cartExist);
            return redirect()->back()->with('message', 'Product added on cart');
        }


    }

    public function clearCart(){
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully');
    }
}
