@extends('stores.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Update the Customer details</div>
  <div class="card-body">
      
      <form action="{{ url('customer/' .$customers->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="customer_name" id="customer_name" value="{{$customers->customer_name}}" class="form-control"></br>
        <label>Group Id</label></br>
        <input type="number" name="price" id="price" value="{{$customers->group_id}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="number" name="mobile" id="mobile" value="{{$customers->mobile}}" class="form-control"></br>
        <label>Email Id</label></br>
        <input type="textarea" name="email" id="email" value="{{$customers->email}}" class="form-control"></br>
        <label>GST No.</label></br>
        <input type="textarea" name="gst_number" id="gst_number" value="{{$customers->gst_number}}" class="form-control"></br>
        <label>Billing Address</label></br>
        <input type="textarea" name="billing_address" id="billing_address" value="{{$customers->billing_address}}" class="form-control"></br>
        <label>Shipping address</label></br>
        <input type="textarea" name="shipping_address" id="shipping_address" value="{{$customers->shipping_address}}" class="form-control"></br>
        <div class="form-group row">    
     <label for="role" >Status</label>
         <div class="form-control ">
       
         <select name="status"class="form-control">
    <option value="1" {{ $status ? 'selected' : '' }}>Active</option>
    <option value="0" {{ $status ? '' : 'selected' }}>Inactive</option>
</select>
                   
                  
              
         </div>
</div>
       
       <br> <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop