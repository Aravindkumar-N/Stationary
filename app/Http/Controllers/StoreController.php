<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Store;
use App\Models\Category;
use Illuminate\View\View;


class StoreController extends Controller
{
    public function index(): View
    {
        // $store = Store::all();
        // $category = Category::all();
        // $stores = Store::with('category')->get();
        // $categories = $stores->categories;
        // return view('stores.chumma', compact('stores','categories'));
       
        // $stores = Store::findOrFail($Id);
        // $categories = $stores->categories;
        // return view('stores.summa', compact('stores','categore'));
        // $categories = Category::with('stores')->get();
        // return view('stores.index', compact('categories'));
 
        $stores = Store::all();
        $categories = Category::all();
      
        return view ('stores.index',compact('stores','categories'));
        
        
        // $product = Store::all(); 
         
        // $params = [
        //     'title' => 'Product Listing',
        //     'product' => $product        ];
 
        // return view('stores.cumma')->with($params);
      
    }
 
    public function create(): View
    {
        $store = Store::all();
        $category = Category::all();
        
        return view('stores.create',compact('store','category'));
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Store::create($input);
        return redirect('store')->with('flash_message', 'Items Addedd!');
    }
    public function show(string $id): View
    {
        $store = Store::find($id);
        return view('stores.show')->with('store', $store);
    }
    public function edit(string $id): View
    {
        $store = Store::findOrFail($id);
        $categories = Category::all();
        return view('stores.edit',compact('store','categories'));
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $store = Store::find($id);
        $input = $request->all();
        $store->update($input);
        return redirect('store')->with('flash_message', 'Item details Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Store::destroy($id);
        return redirect('store')->with('flash_message', 'items deleted!'); 
    }
    public function index1($categoryId)
    { return view('stores.wecome');
        $category = Category::find($id);
        $stores = $category->stores;
        return view('stores.index1')->with('stores', $stores);;
}
    // public function index1()
    // {
    //     $category = Category::find($categoryId);
    //     $stores = $category->stores()->get();
    //     foreach ($stores as $store) {
    //         echo $store->name . ": " . $store->price . ", Quantity: " . $store->quantity . "<br>";
       

        
        // return view('stores.index1', compact('stores', 'category'));
    }
 
    
    // public function home()
    // {
    //     return view('home');
    // }

    // public function addpage(){
    //     return view('add');
    // }

    // // public function addsubmit(){
    // //     $stores = Store::all();
    // //     return view('stores.home')->with('stores',$stores);
    
    // public function addsubmit(Request $request){
    //     $input = $request->all();
    //     User::create([
    //         'name' => $input['name'],
    //         'price' => $input['price'],
    //         'quantity' => $input['quantity'],
    //         'description' => $input['description'],
           
    //     ]);

    //     return view('welcome');
    // }

    