@extends('stores.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Update the Customer details</div>
  <div class="card-body">
      
      <form action="{{ url('group/' .$groups->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$groups->id}}" id="id" />
        <label>Group Name</label></br>
        <input type="text" name="groupName" id="groupName" value="{{$groups->groupName}}" class="form-control"></br>
        <label>Group Code</label></br>
        <input type="number" name="groupCode" id="groupCode" value="{{$groups->groupCode}}" class="form-control"></br>
        
        
       <br> <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop