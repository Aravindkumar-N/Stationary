@extends('stores.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $stores->name }}</h5>
        <p class="card-text">price : {{ $stores->price }}</p>
        <p class="card-text">quantity : {{ $stores->quantity }}</p>
  </div>
       
    </hr>
  
  </div>
</div>