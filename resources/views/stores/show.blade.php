@extends('stores.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
  @if($store)
            <h5 class="card-title">Name : {{ $store->name }}</h5>
            <p class="card-text">Price : Rs.{{ $store->price }}</p>
            <p class="card-text">Quantity : {{ $store->quantity }} pcs</p>
            <p class="card-text">Description : {{ $store->description}}</p>
        @else
            <p>Store not found.</p>
        @endif
    </div>
       
    </hr>
    <a href="{{ url('store') }}"><button class='btn btn-primary '>Back to home</button></a>
  
  </div>
</div>