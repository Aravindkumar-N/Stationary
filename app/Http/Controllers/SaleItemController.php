<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Sale;
use App\Models\Store;
use App\Models\SaleItem;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\View\View;

class SaleItemController extends Controller
{
    
    public function index()
    {
        $sales = Sale::all();
        $sale_items = SaleItem::all();
        $categories = Category::all();
        $customers = Customer::all();
        $stores = Store::all();
        return view ('sale_item.index',compact('sale_items','sales','customers','stores','categories'));
    }

  
    public function create()
    {
        $stores = Store::all();
        $category = Category::all();
        $sales = Sale::all();
        
        return view('sale_item.create',compact('stores','category','sales'));
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        SaleItem::create($input);
        return view('saleItem')->with('flash_message', 'Items Addedd!');
    }
    

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $stores = Store::all();
        $sale_items = SaleItem::findOrFail($id);
        $categories = Category::all();
        return view('sale_item.edit',compact('sale_items','categories','stores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sale_items = SaleItem::find($id);
        $input = $request->all();
        $sale_items->update($input);
        return redirect('saleItem')->with('flash_message', 'Item details Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SaleItem::destroy($id);
        return redirect('saleItem')->with('flash_message', 'items deleted!'); 
    }

  
}
