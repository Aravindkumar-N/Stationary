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
    public function storesByCategory($categoryId)
    {
        $stores = Store::where('CategoryId', $categoryId)->get();
        $category = Category::findOrFail($categoryId);
    
        return view('stores.index1', compact('stores', 'category'));
    }
}
