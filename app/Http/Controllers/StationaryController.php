<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Store;
use App\Models\Category;
use Illuminate\View\View;


class StationaryController extends Controller
{
   
    public function index(): View
    {
        $category = Category::all();
        return view ('stores.CatIndex')->with('category', $category);
    }

    
    public function create(): View
    {
        return view('stores.add_cat');
    }

    
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Category::create($input);
        return redirect('cat')->with('flash_message', 'Items Addedd!');
    }

    public function show($id): View
    {
        $category = Category::find($id);
        return view('stores.CatShow')->with('category', $category); 
    }

    
    public function edit($id): View
    {
        $category = Category::find($id);
        return view('stores.CatEdit')->with('category', $category);
    }

    
    public function update(Request $request, $id): RedirectResponse
    {
        $category = Category::find($id);
        $input = $request->all();
        $category->update($input);
        return redirect('cat')->with('flash_message', 'Item details Updated!');  
    }

    
    public function destroy($id): RedirectResponse  
    {
        Category::destroy($id);
        return redirect('cat')->with('flash_message', 'items deleted!'); 
    }
}
