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
        $store = Store::all();
        return view ('stores.index')->with('store', $store);
    }
 
    public function create(): View
    {
        return view('stores.create');
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
        $store = Store::find($id);
        return view('stores.edit')->with('store', $store);
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

