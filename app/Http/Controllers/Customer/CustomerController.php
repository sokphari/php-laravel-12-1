<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    public function index(){
    //    $customers = Customer::all(); // select * from tb;
       $customers = Customer::latest()
                            ->paginate(10); // select * from tb;
    return view('customers.index',compact('customers'));
    }

    public function create(){
        return view('customers.create');
    } 
    public function store(Request $request){
        // Store the customer logic here
        $validate = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|string|max:20',
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }   
        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);
        return redirect()->route('index.get')->with('success','Customer Created Successfully');
        
    }
    public function destroy(int $id){
        $customer = Customer::findOrfail($id);
        $customer->delete();
        return redirect()->route('index.get')->with('success','Customer Deleted Successfully');
    }
    public function edit(int $id){
        $customer = Customer::findOrfail($id);
        return view('customers.edit',compact('customer'));
    }
    
}

