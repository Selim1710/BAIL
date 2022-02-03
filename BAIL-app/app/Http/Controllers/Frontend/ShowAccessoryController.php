<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AccessoryOrder;
use App\Models\AccessoryStock;
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
            $accessory = AddAccessory::where('accessories_type', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();
        } else {
            $accessory = AddAccessory::findOrFail($id);

            $accessory->sold = AccessoryOrder::where('status', 'confirmed')->sum('quantity');
            $accessory->stock = AccessoryStock::all()->sum('total_produce');
            $accessory->available = $accessory->stock - $accessory->sold + $accessory->total_produce;
        }
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
        if ($request->available > $request->quantity) {
            AccessoryOrder::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,

                'accessories_type' => $request->accessories_type,
                'accessories_id' => $request->id,
                'accessories_name' => $request->name,
                'accessories_price' => $request->accessories_price,
                'quantity' => $request->quantity,

                'total_price' => $request['accessories_price'] * $request['quantity'],
            ]);
            return redirect()->route('user.show.accessories')->with('message', 'Accessories Ordered Successfully');
        } else {
            return redirect()->back()->with('error', 'Out Of Stock');
        }
    }

    public function addToCart($id)
    {
        $accessories = AddAccessory::find($id);

        // case:1

        if (!$accessories) {
            return redirect()->back()->with('error', 'accessories is not availabe into the card');
        }

        $cartExist = session()->get('cartA');
        if (!$cartExist) {
            $cartData = [
                $id => [
                    'accessories_id' => $id,
                    'accessories_name' => $accessories->name,
                    'accessories_type' => $accessories->accessories_type,
                    'accessories_price' => $accessories->accessories_price,
                    'quantity' => 1,
                ]
            ];
            session()->put('cartA', $cartData);
            return redirect()->back()->with('message', 'Accessories added into cart');
        }

        // case:2

        if (!isset($cartExist[$id])) {
            $cartExist[$id] = [
                'accessories_id' => $id,
                'accessories_name' => $accessories->name,
                'accessories_type' => $accessories->accessories_type,
                'accessories_price' => $accessories->accessories_price,
                'quantity' => 1,
            ];

            session()->put('cartA', $cartExist);
            return redirect()->back()->with('message', 'Accessories added on cart');
        }

        // case: 3
        $cartExist[$id]['accessories_quantity'] = $cartExist[$id]['accessories_quantity'] + 1;
        session()->put('cartA', $cartExist);
        return redirect()->back()->with('message', 'Same Accessories added into the cart');
    }

    public function clearCart()
    {
        session()->forget('cartA');
        return redirect()->back()->with('message', 'Cart cleared successfully');
    }

    public function checkout()
    {
        $cartA = session()->get('cartA');

        if ($cartA) {
            foreach ($cartA as $cart)
                $order = AccessoryOrder::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'email' => auth()->user()->email,

                    'accessories_id' => $cart['accessories_id'],
                    'accessories_name' => $cart['accessories_name'],
                    'accessories_price' => $cart['accessories_price'],
                    'accessories_type' => $cart['accessories_type'],
                    'quantity' => $cart['quantity'],

                    'total_price' => (int)$cart['accessories_price'] * (int)$cart['quantity'],
                ]);
            session()->forget('cartA');
            return redirect()->back()->with('message', 'Order place successfully');
        }
        return redirect()->back()->with('error', 'No data found into the cart');
    }

    public function deleteFromCart($id)
    {
        $cart = session()->get('cartA');
        unset($cart[$id]);
        session()->put('cartA', $cart);
        return redirect()->back()->with('error', 'Accessories Deleted');
    }
}
