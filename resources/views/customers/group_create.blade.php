@extends('stores.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Groups</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Groups</title>
</head>
<body>
<div class="container mt-3">
  <h2>Group</h2>
  <form action="{{ url('group') }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
      <label for="groupName">Group Name:</label>
      <input type="text" class="form-control" id="groupName" placeholder="Enter the Group Name" name="groupName">
    </div>
    <div class="mb-3 mt-3">
      <label for="groupCode">Group code:</label>
      <input type="text" class="form-control" id="groupCode" placeholder="Enter Group Code" name="groupCode">
    </div>
   
   
    
   <input type="submit" class="btn btn-primary" name="" value="submit" >
  </form>
</div>
</body>
</html>