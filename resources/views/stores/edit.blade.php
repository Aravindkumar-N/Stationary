@extends('stores.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('store/' .$stores->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$stores->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$stores->name}}" class="form-control"></br>
        <label>price</label></br>
        <input type="text" name="address" id="address" value="{{$stores->price}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop