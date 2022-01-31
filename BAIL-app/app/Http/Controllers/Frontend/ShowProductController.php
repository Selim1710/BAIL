<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddProduct;
use App\Models\ManageOrder;
use App\Models\Stock;
use Illuminate\Http\Request;


class ShowProductController extends Controller
{

    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($request != "") {
            $products = AddProduct::where('product_type', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
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
            $products = AddProduct::where('name', 'LIKE', "%$search%")->orwhere('product_type', 'LIKE', "%$search%")->get();
        } else {
            $products = AddProduct::all();
        }

        $products = AddProduct::findOrFail($id);
        $products->sold = ManageOrder::where('product_id', $products->id)->sum('quantity');
        $products->stock = Stock::where('product_id', $products->id)->sum('quantity');
        $products->available = $products->total_produce + $products->stock - $products->sold;

        return view('website.layouts.form.product_order', compact('products', 'search'));
    }

    public function orderPlace(Request $request, $id)
    {
        $products = AddProduct::find($id);
        $request->validate([
            'quantity' => 'required'
        ]);

        if ($request->available >= $request->quantity) {
            ManageOrder::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'product_type' => $request->product_type,
                'product_id' => $request->id,
                'product_name' => $request->name,
                'unit_price' => $request->price,
                'quantity' => $request->quantity,
                'total_price' => $request['price'] * $request['quantity'],
            ]);
            return redirect()->route('user.show.product');
        }

        return redirect()->back()->with('message', 'Out Of Stock');
    }

    public function addToCart($id)
    {

        //Case-1: if there is no product in the cart. first time user adding product into the cart
        // Action: add to cart

        $products = AddProduct::find($id);

        if (!$products) {
            return redirect()->back()->with('error', 'Product is not availabe into the card');
        }

        $cartExist = session()->get('cart');
        if (!$cartExist) {
            $cartData = [
                $id => [
                    'product_id' => $id,
                    'product_name' => $products->name,
                    'product_price' => $products->product_price,
                    'product_type' => $products->product_type,
                    'product_quantity' => 1,
                ]
            ];

            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product added into cart');
        }


        //case-2: if one product is alreadey available into the cart but user want to add another cart
        // Action: add different product with quantity 1

        if (!isset($cartExist[$id])) {
            $cartExist[$id] = [
                'product_id' => $id,
                'product_name' => $products->name,
                'product_price' => $products->product_price,
                'product_type' => $products->product_type,
                'product_quantity' => 1,
            ];

            session()->put('cart', $cartExist);
            return redirect()->back()->with('message', 'Product added on cart');
        }

        // case-3: if adding same product into the cart
        // action: jncrease product quantity(quantity+1)

        $cartExist[$id]['product_quantity'] = $cartExist[$id]['product_quantity'] + 1;

        // dd($cartExist);

        session()->put('cart', $cartExist);
        return redirect()->back()->with('message', 'Same Product added into the cart');
    }

    public function deleteFromCart($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message', 'Cart cleared successfully');
    }

    public function checkout()
    {
        $carts = session()->get('cart');
        // dd($carts);

        if ($carts) {
            foreach ($carts as $cart)
                $order = ManageOrder::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                    'product_id' => $cart['product_id'],
                    'product_name' => $cart['product_name'],
                    'unit_price' => $cart['product_price'],
                    'product_type' => $cart['product_type'],
                    'quantity' => $cart['product_quantity'],
                    
                    'total_price' => (int)$cart['product_price'] * (int)$cart['product_quantity'],
                ]);
            session()->forget('cart');
            return redirect()->back()->with('message', 'Order place successfully');
        }
        return redirect()->back()->with('error', 'No data found into the cart');
    }
}
