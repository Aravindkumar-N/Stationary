<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function home(){
        return view('home');
    }

    public function addpage(){
        return view('add');
    }
    public function addsubmit(Request $request){
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'price' => $input['price'],
            'quantity' => $input['quantity'],
            'description' => $input['description'],
           
        ]);

        return view('home');
    }
}
