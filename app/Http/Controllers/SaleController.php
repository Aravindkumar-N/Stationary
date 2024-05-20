<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\TaxDetail;
use App\Models\Store;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;

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
        $tax_details = TaxDetail::all();
         
     return view('sales.addcart',compact('stores','category','sales','tax_details'));
    }

    public function show2(Request $request, $id){
        // Validate the request data
    $validated = $request->validate([
        'sale_id' => 'required|exists:sales,id',
        'item_id' => 'required|exists:stores,id',
        'quantity' => 'required|integer',
        'unit_price' => 'required|numeric',
        'tax_id' => 'required|exists:tax_details,id',
    ]);

  
    $taxDetail = TaxDetail::find($validated['tax_id']);
    $taxPercentage = $taxDetail->tax_percentage;

    
     $sub_total = $validated['unit_price'] * $validated['quantity'];
    $taxAmount = ($sub_total * $taxPercentage) / 100;
    $totalPrice = $sub_total + $taxAmount;

   
    $sale_items = new SaleItem();
    $sale_items->sale_id = $validated['sale_id'];
    $sale_items->item_id = $validated['item_id'];
    $sale_items->quantity = $validated['quantity'];
    $sale_items->unit_price = $validated['unit_price'];
    $sale_items->total_price = $totalPrice;
    $sale_items->save();

    $sale_items = SaleItem::where('sale_id', $id)->get();

   
    $total_price_sum = $sale_items->sum('total_price');

    $sale = Sale::findOrFail($id);
    $sale->total_price = $total_price_sum;
    $sale->save();


   
    $sales = Sale::findOrFail($id);
    $customers = Customer::all();
    $stores = Store::all();
    $tax_details = TaxDetail::all();
    $categories = Category::all();

   
   

  
    return view('sales.show', compact('tax_details', 'sales', 'customers', 'categories', 'stores', 'sale_items', 'total_price_sum'));
}
    

    public function viewInvoice(int $id){
        $sales = Sale::findOrFail($id);

        $customers = Customer::all();
        $stores = Store::all();
        $categories = Category::all();
        $sale_items = $sales->saleItem;

        $total_price_sum = $sale_items->sum('total_price');

        return view('sales.invoice.view_invoice',compact('sales','customers','categories','sale_items','stores','total_price_sum'));
    }

    public function generateInvoice(int $id){
        $sales = Sale::findOrFail($id);
        
        $data = ['sales' => $sales];
        $todaydate = Carbon::now()->format('d-m-Y');    
        $pdf = Pdf::loadView('sales.invoice.view_invoice', $data);
        return $pdf->download('invoice'.$sales->id.'-'.$todaydate.'pdf');
    }

    public function show3(Request $request, $id){
        $input = $request->all();
        SaleItem::create($input);
    }
}
