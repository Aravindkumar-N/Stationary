<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Customer;
// use App\Models\Category;
use Illuminate\View\View;


class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::all();
        return view('customers.customer_index')->with('customers', $customers);
    }

   
     
    public function create()
    {
        $status=true;
        return view('customers.customer_create' ,compact('status'));
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        Customer::create($input);
        return redirect('customer')->with('flash_message', 'Items Addedd!');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        $status=true;
        // $categories = Category::all();
        return view('customers.customer_edit',compact('status','customers'));
    }

    
    public function update(Request $request, string $id)
    {
        $customers = Customer::find($id);
        $input = $request->all();
        $customers->update($input);
        return redirect('customer')->with('flash_message', 'Item details Updated!');  
    }

    
    public function destroy($id)
    {
        
        Customer::destroy($id);
        return redirect('customer')->with('flash_message', 'items deleted!'); 
    
    }
}
