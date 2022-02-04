<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AddAccessory;
use App\Models\AddProduct;
use Illuminate\Http\Request;

class UpdateImageController extends Controller
{
    public function changeImage(Request $request, $id)
    {
        $filename = '';
        if ($request->hasfile('image_path')) {
            $file = $request->file('image_path');
            $filename = date('Ymdmhs') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads/product', $filename);
        }
        
        AddProduct::where('id', $id)->update([
            'image_path' => $filename,
        ]);
        return redirect()->route('product.index')->with('message', 'Product Imange Updated');

    }

    public function changeaccessoryImage(Request $request, $id)
    {
        $accessories = '';
        if ($request->hasfile('acc_img')) {
            $accessory = $request->file('acc_img');
            $accessories = date('Ymdhms') . '.' . $accessory->getClientOriginalExtension();
            $accessory->storeAs('/uploads/accessories', $accessories);
        }
        
        AddAccessory::where('id', $id)->update([
            'acc_img' => $accessories,
        ]);
        return redirect()->route('accessories.index')->with('message', 'Accessories Imange Updated');

    }
}
