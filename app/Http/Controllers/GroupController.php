<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\Group;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\View\View;

class GroupController extends Controller
{
   
    public function index()
    {
        $groups = Group::all();
        $categories = Category::all();
        $ProductCount = Group::select('groups.*')
        ->leftJoin('customers', 'groups.id', '=', 'customers.group_id')
        ->select('groups.*', Customer::raw('COUNT(customers.id) as product_count'))
        ->groupBy('groups.id')
        ->get();
        return view ('customers.group_index',compact('groups','ProductCount','categories'));
    }

    
    public function create()
    {
        
        return view('customers.group_create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Group::create($input);
        return redirect('group')->with('flash_message', 'Items Addedd!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $groups = Group::findOrFail($id);
       
        // $categories = Category::all();
        return view('customers.group_edit',compact('groups'));
    }

    
    public function update(Request $request, $id)
    {
        $groups = Group::find($id);
        $input = $request->all();
        $groups->update($input);
        return redirect('group')->with('flash_message', 'Item details Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return redirect('group')->with('flash_message', 'items deleted!'); 
    }
}
