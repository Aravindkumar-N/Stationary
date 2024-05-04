<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responce;
use Illuminate\Http\RedirectResponce;
use App\Http\Controllers\RedirectResponse;
use App\Models\store;
use Illuminate\View\view;


class StoreController extends Controller
{
    public function index(): View
    {
        $stores = store::all();
        return view ('stores.index')->with('stores', $stores);
    }
 
    public function create(): View
    {
        return view('stores.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        store::create($input);
        return redirect('stores')->with('flash_message', 'Items Addedd!');
    }
    public function show(string $id): View
    {
        $store = store::find($id);
        return view('stores.show')->with('stores', $store);
    }
    public function edit(string $id): View
    {
        $store = store::find($id);
        return view('stores.edit')->with('stores', $store);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $store = store::find($id);
        $input = $request->all();
        $store->update($input);
        return redirect('stores')->with('flash_message', 'Item details Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        store::destroy($id);
        return redirect('stores')->with('flash_message', 'items deleted!'); 
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
}
