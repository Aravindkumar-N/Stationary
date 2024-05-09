@extends('stores.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Items</title>
</head>
<body>
<div class="container mt-3">
  <h2>Your Item</h2>
  <form action="{{ url('store') }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
      <label for="name">Item Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter the Item" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
    </div>
    <div class="mb-3 mt-3">
      <label for="quantity">Quantity:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
    </div>
    <div class="mb-3">
      <label for="add">Description:</label>
      <input type="textarea" class="form-control" id="description" placeholder="Enter The Description" name="description">
    </div>
   
    <div class="form-group row">    
     <label for="role" >Category</label>
         <div class="form-control ">
              <select class="form-control" id="CategoryId" name="CategoryId" required focus>
              @foreach ($category as $item)
                  <option value="{{ $item->id }}"  selected>{{ $item->catname }}</option>        
                  @endforeach 
                  <option value="Select categoy" disabled selected>Select Category</option>    
              </select>
         </div>
</div>
    
   <input type="submit" class="btn btn-primary" name="" value="submit" >
  </form><a href="{{ url('store') }}"><button class='btn btn-primary float-end '>Back to home</button></a>
  
</div>
</body>
</html>