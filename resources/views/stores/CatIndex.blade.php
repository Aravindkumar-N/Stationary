@extends('stores.layout')
@section('content')
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Home page</title>
</head>
<body>
    <center><h1>Welcome to NEOPHRON store </h1></center>
    <div class="container mt-3">
    <a href="{{ url('/cat/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
    
 
  
<h2>User details</h2>
  <p>Here the details of the user which are inserted in previous page</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Operations</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($category as $item)
      <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $item->catname }}</td>
      <td>
        <!-- <a href="{{url('categories/' . $item->id .'/stores') }}" title="View Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
        <a href="{{ url('/cat/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
        <form method="POST" action="{{ url('/store/cat' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
             <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
         </form>
       </td>
       </tr>
         @endforeach
        </tbody>                              
                        
        <a href="{{ url('store') }}"><button class='btn btn-primary float-end '>Back to home</button></a>
</div>
</body>
</html>