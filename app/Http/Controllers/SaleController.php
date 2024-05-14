<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Sale;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\View\View;

class SaleController extends Controller
{
    
    
    public function index()
    {
        $sales = Sale::all();
        $categories = Category::all();
        $customers = Customer::all();
        return view ('sales.index',compact('sales','categories','customers'));
    }

    public function create()
    {
        $sales = Sale::all();
        $customers = Customer::all();
        
        return view('sales.create',compact('sales','customers'));
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        Sale::create($input);
        return redirect('sale')->with('flash_message', 'Items Addedd!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $sales = Sale::findOrFail($id);
        $customers = Customer::all();
        return view('sales.edit',compact('sales','customers'));
    }

   
    public function update(Request $request, $id)
    {
        $sales = Sale::find($id);
        $input = $request->all();
        $sales->update($input);
        return redirect('sale')->with('flash_message', 'Item details Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::destroy($id);
        return redirect('sale')->with('flash_message', 'items deleted!'); 
    }
}
