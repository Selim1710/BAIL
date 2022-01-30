<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use Illuminate\Http\Request;

class EditAccessoriesController extends Controller
{

    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $accessories = AddAccessory::where("name", 'LIKE', "%$search%")->get();
        } else {
            $accessories = AddAccessory::all();
        }
        return view('admin.layouts.tables.manage_accessories', compact('accessories', 'search'));
    }


    public function create()
    {
        return view('admin.layouts.forms.add_accessories');
    }


    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'accessories_type' => 'required',
            'accessories_details' => 'required',
            'accessories_price' => 'required',
            'acc_img' => 'required',
        ]);

        $accessories = '';
        if ($request->hasfile('acc_img')) {
            $accessory = $request->file('acc_img');
            $accessories = date('Ymdhms') . '.' . $accessory->getClientOriginalExtension();
            $accessory->storeAs('/uploads/accessories', $accessories);
        }

        AddAccessory::create([
            'name' => $request->input('name'),
            'accessories_type' => $request->input('accessories_type'),
            'accessories_details' => $request->input('accessories_details'),
            'accessories_price' => $request->input('accessories_price'),
            'acc_img' => $accessories

        ]);
        return redirect()->route('accessories.index')->with('message', 'Accessories Added');
    }


    public function view($id)
    {
        $accessory = AddAccessory::find($id);
        return view('admin.layouts.tables.view.view_accessories', compact('accessory'));
    }


    public function edit($id)
    {
        $accessories = AddAccessory::find($id);
        return view('admin.layouts.forms.edit_accessories', compact('accessories'));
    }


    public function update(Request $request, $id)
    {

        $accessories = '';
        if ($request->hasfile('acc_img')) {
            $accessory = $request->file('acc_img');
            $accessories = date('Ymdhms') . '.' . $accessory->getClientOriginalExtension();
            $accessory->storeAs('/uploads/accessories', $accessories);
        }
        AddAccessory::where('id', $id)->update([
            'name' => $request->name,
            'accessories_type' => $request->accessories_type,
            'accessories_details' => $request->accessories_details,
            'accessories_price' => $request->accessories_price,
            'acc_img' => $accessories,

        ]);
        return redirect()->route('accessories.index')->with('message', 'Accessories Updated');
    }


    public function destroy($id)
    {
        $accessories = AddAccessory::findOrFail($id);
        $accessories->delete();
        return redirect()->route('accessories.index')->with('error', 'Accessories Deleted');
    }
}
