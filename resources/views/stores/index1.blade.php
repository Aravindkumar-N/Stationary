
@extends('stores.layout')

@section('content')
<h1>Category: {{ $category->catname }}</h1>
<table class="table table-hover">
    <thead>
      <tr>
      <th>No.</th>
        <th>Product Name</th>
        <th>price</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($stores as $store)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $store->name }}</td>
                                        <td>{{ $store->price }}</td>                                                                  
                                    </tr>
                                @endforeach
                                </tbody>       




<!-- <h1>Category: {{ $category->catname }}</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach ($stores as $store)
             <td>{{ $loop->iteration }}</td>
             <td>{{ $store->name }}</td>
             <td>{{ $store->price }}</td><br>
             @endforeach 
</tr>
</tbody> -->

<!-- 
<ul>
    @foreach ($stores as $store)
        <li>{{ $store->name }}</li>
        <li>{{ $store->price }}</li>  
    @endforeach
</ul> -->