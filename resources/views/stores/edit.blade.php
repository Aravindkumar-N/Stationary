@extends('stores.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('store/' .$store->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$store->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$store->name}}" class="form-control"></br>
        <label>price</label></br>
        <input type="number" name="price" id="price" value="{{$store->price}}" class="form-control"></br>
        <label>Quantity</label></br>
        <input type="number" name="quantity" id="quantity" value="{{$store->quantity}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="textarea" name="description" id="description" value="{{$store->description}}" class="form-control"></br>
        <label>Category Id</label></br>
        <input type="number" name="CategoryId" id="CategoryId" value="{{$store->CategoryId}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop