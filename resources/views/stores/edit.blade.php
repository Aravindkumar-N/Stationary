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
        <div class="form-group row">    
     <label for="role" >Category</label>
         <div class="form-control ">
              <select class="form-control" id="CategoryId" name="CategoryId" required focus>
              @foreach ($category as $item)
                  <option value="{{ $item->id }}"  selected>{{ $item->catname }}</option>        
                  @endforeach    
                  <option value="Select" disabled selected>Select</option> 
              </select>
         </div>
</div>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop