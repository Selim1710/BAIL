<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use App\Models\AddToCart;
use App\Models\ManageOrder;
use Illuminate\Http\Request;

class ShowAccessoryController extends Controller
{

    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $accessories = AddAccessory::where('accessories_type', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        } else {
            $accessories = AddAccessory::all();
        }
        return view('website.layouts.show_accessories', compact('accessories', 'search'));
    }


    public function orderForm(Request $request, $id)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $accessory = AddAccessory::where('accessories_model', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        } else {
            $accessories = AddAccessory::all();
        }
        $accessory = AddAccessory::findOrFail($id);
        return view('website.layouts.form.accessories_order', compact('accessory', 'search'));
    }



    public function view($id)
    {
        // dd($id);
        $accessory = AddAccessory::find($id);
        return view('website.layouts.details.accessories_details', compact('accessory'));
    }

    public function accessoryOrder(Request $request, $id)
    {
        ManageOrder::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'product_name' => $request->name,
            'unit_price' => $request->accessories_price,
            'quantity' => $request->quantity,

            'total_price' => $request['accessories_price'] * $request['quantity'],
        ]);
        return redirect()->route('user.show.accessories');
    }

    public function addToCart($id)
    {
        $accessories = AddAccessory::find($id);

        // case:1

        if (!$accessories) {
            return redirect()->back()->with('error', 'accessories is not availabe into the card');
        }

        $cartExist = session()->get('cart');
        if (!$cartExist) {
            $cartData = [
                $id => [
                    'product_id' => $id,
                    'product_name' => $accessories->name,
                    'product_price' => $accessories->accessories_price,
                    'product_quantity' => 1,
                ]
            ];

            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'accessories added into cart');
        }

        // case:2

        if (!isset($cartExist[$id])) {
            $cartExist[$id] = [
                'product_id' => $id,
                'product_name' => $accessories->name,
                'product_price' => $accessories->accessories_price,
                'product_quantity' => 1,
            ];

            session()->put('cart', $cartExist);
            return redirect()->back()->with('message', 'Product added on cart');
        }

        // case: 3

        $cartExist[$id]['product_quantity'] = $cartExist[$id]['product_quantity'] + 1;
        session()->put('cart', $cartExist);
        return redirect()->back()->with('message', 'Same Product added into the cart');
    }
}
