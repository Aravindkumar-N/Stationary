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
  <form action="{{ url('cat') }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
      <label for="category">Category Name:</label>
      <input type="text" class="form-control" id="category" placeholder="Enter the Item" name="category">
    </div>
   
   <input type="submit" class="btn btn-primary" name="" value="submit" >
  </form>
</div>
</body>
</html>