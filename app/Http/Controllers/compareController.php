<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Store;
use App\Models\Category;
use Illuminate\View\View;


class compareController extends Controller
{
    public function index(): View
    {
        $stores = Store::with('category')->get();
        $categories = Category::with('stores')->get();

        return view('stores.index1', compact('stores', 'categories'));
        // $category = Category::all();
        // return view ('stores.CatIndex')->with('category', $category);
    }

//     public function viewCategoryStores($categoryId)
// {
//     $category = Category::findOrFail($categoryId);
//     $stores = $category->stores;
    
//     return view('stores.index1', compact('category', 'stores'));
// }
public function viewStores($categoryId)
{
    $category = Category::findOrFail($categoryId);
    $stores = $category->stores;

    return view('stores.index1', compact('stores','category'));
}

public function addcart()
{
 return view('sales.addcart');
}

}
