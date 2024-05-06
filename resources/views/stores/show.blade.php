@extends('stores.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
  @if($store)
            <h5 class="card-title">Name : {{ $store->name }}</h5>
            <p class="card-text">Price : {{ $store->price }}</p>
            <p class="card-text">Quantity : {{ $store->quantity }}</p>
            <p class="card-text">Description : {{ $store->description}}</p>
        @else
            <p>Store not found.</p>
        @endif
    </div>
       
    </hr>
  
  </div>
</div>