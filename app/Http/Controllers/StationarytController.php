<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Store;
use App\Models\Category;
use Illuminate\View\View;

class StationarytController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $category = Category::all();
        return view ('stores.CatIndex')->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('stores.add_cat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return redirect('cat')->with('flash_message', 'Items Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('stores.CatShow')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('stores.CatEdit')->with('category', $category);
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
        $category = Category::find($id);
        $input = $request->all();
        $category->update($input);
        return redirect('cat')->with('flash_message', 'Item details Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Category::destroy($id);
        return redirect('cat')->with('flash_message', 'items deleted!'); 
    }
    public function storesByCategory($categoryId)
{
    $stores = Store::where('CategoryId', $categoryId)->get();
    $category = Category::findOrFail($categoryId);

    return view('stores.index1', compact('stores', 'category'));
}
public function productView(Request $request) {
    return view('welcome');
    $categoryId = $request->input('category');

    // Fetch products based on the category ID
    $products = Product::where('CategoryId', $categoryId)->get();

    return view('stores.index1', ['name' => $products]);
}
}
