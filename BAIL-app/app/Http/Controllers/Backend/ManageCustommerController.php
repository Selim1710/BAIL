<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerBlockList;
use Illuminate\Http\Request;
use App\Models\User;

class ManageCustommerController extends Controller
{
    public function index(Request $request){
        $search = $request['search'] ?? "";
        if ($search != "") {
            $customers=User::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        }
        else{
            $customers=User::where('role','user')->get();
        }
        return view('admin.layouts.tables.manage_customer',compact('customers'));
    }

    public function remove($id){
        $customer = User::find($id);
            CustomerBlockList::create([
                'email'=>$customer->email,
            ]);
        $customer->delete();
        return redirect()->route('customer.list')->with('error','Customer Removed');
    }

    public function blockList(){
        $blockLists = CustomerBlockList::paginate(10);
        return view('admin.layouts.tables.customer_block_list',compact('blockLists'));
    }
}
