@extends('stores.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Update the Product details</div>
  <div class="card-body">
      
      <form action="{{ url('store/' .$store->id) }}" method="post">
        @csrf
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
       
              <select class="form-control" id="CategoryId" name='CategoryId' >
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}"  @if ($store->CategoryId == $category->id ) selected @endif>{{ $category->catname }}</option> 
               
                  @endforeach  
               
                  </select>
                   
                  
              
         </div>
</div>
<div class="form-group row">    
<label for="role" >Tax Type</label>
         <div class="form-control ">
       
              <select class="form-control" id="tax_id" name='tax_id' >
              @foreach ($tax_details as $tax)
                  <option value="{{ $tax->id }}" selected>{{ $tax->tax_name }}</option> 
                  @endforeach                 
                  </select>          
         </div>
</div>
       
       <br> <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop