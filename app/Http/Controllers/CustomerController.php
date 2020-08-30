<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('Customer')->with('customers', $customers);
    }
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->customer = $request->customer;
        $customer->email = $request->email;
        $customer->phone = $request->phone;

        $customer->save();

        return redirect('/customer');
    }
    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('Edit-Customer')->with('customers', $customers);
    }
    public function update(Request $request, $id)
    {
        $customers = Customer::find($id);

        $customers->id = $request->id;
        $customers->customer = $request->customer;
        $customers->email = $request->email;
        $customers->phone = $request->phone;

        $customers->save();
        
        return redirect('/customer');
    }
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('/customer');
    }
}
