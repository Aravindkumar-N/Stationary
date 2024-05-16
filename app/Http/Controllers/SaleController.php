<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Sale;
use App\Models\SaleItem;

use App\Models\Store;
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
        $sales = Sale::findOrFail($id);
        $customers = Customer::all();
        $stores = Store::all();
        $categories = Category::all();
        $sale_items = $sales->saleItem;

        $total_price_sum = $sale_items->sum('total_price');

        return view('sales.show',compact('sales','customers','categories','sale_items','stores','total_price_sum'));
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

    
    
    public function destroy($id)
    {
        Sale::destroy($id);
        return redirect('sale')->with('flash_message', 'items deleted!'); 
    }

    public function addcart($id)
    {
        $sales = Sale::findOrFail($id);
        $stores = Store::all();
        $category = Category::all();
         
     return view('sales.addcart',compact('stores','category','sales'));
    }

    public function show2(Request $request, $id){
        $input = $request->all();
        SaleItem::create($input);

        $sales = Sale::findOrFail($id);
        $customers = Customer::all();
        $stores = Store::all();
        $categories = Category::all();
        $sale_items = $sales->saleItem;

        $total_price_sum = $sale_items->sum('total_price');

        return view('sales.show',compact('sales','customers','categories','sale_items','stores','total_price_sum'));
    }
    
    // public function updateSaleItem(Request $request, $saleItemId)
    // {
    //     $saleItem = SaleItem::findOrFail($saleItemId);
    //     $saleItem->update($request->all());
    
    //     // Update the related sale's total price
    //     $saleItem->sale->save();  // This will trigger the saving event and update the total price
    // }
}
