<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaxDetail;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Store;
use App\Models\Category;
use Illuminate\View\View;


class TaxController extends Controller
{
   
    public function index()
    {
        $stores = Store::all();
        $categories = Category::all();
        $tax_details = TaxDetail::all();
      
        return view ('taxes.index',compact('stores','categories','tax_details'));
    }

    
    public function create()
    {
        $tax_details = TaxDetail::all();
        $category = Category::all();
        
        return view('taxes.create',compact('tax_details','category'));
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        TaxDetail::create($input);
        return redirect('tax');
    }

   
    
    public function show($id)
    {
        //
    }

   
    
    public function edit($id)
    {
        $tax_details = TaxDetail::findOrFail($id);
        $categories = Category::all();
        return view('taxes.edit',compact('tax_details','categories'));
    }

    
    public function update(Request $request, $id)
    {
        $tax_details = TaxDetail::find($id);
        $input = $request->all();
        $tax_details->update($input);
        return redirect('tax')->with('flash_message', 'Item details Updated!');  
    }

   
    public function destroy($id)
    {
        TaxDetail::destroy($id);
        return redirect('tax')->with('flash_message', 'items deleted!');
    }
}
