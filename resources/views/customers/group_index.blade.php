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
    <a href="{{ url('/group/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
    
 
  
<h2>Groups</h2>
  <p>Groups details are here</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Group Name</th>
        <th>Group Code</th>
        <th>Group Members</th>
        <th>Operations</th>
        
      </tr>
    </thead><tbody>
    @foreach ($ProductCount as $group)
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td>{{ $group->groupName }}</td>
                                       <td>{{ $group->groupCode}}</td>
                                      
                                       <td>{{ $group->product_count }}</td>
                                       
                                      

                                       <td>
                                          
                                           <a href="{{ url('/group/' . $group->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           <form method="POST" action="{{ url('/group' . '/' . $group->id) }}" accept-charset="UTF-8" style="display:inline">
                                               {{ method_field('DELETE') }}
                                               {{ csrf_field() }}
                                               <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                           </form>
                                       </td>
                                   </tr>
    @endforeach
                                
    <tbody>
         
                   
        <a href="{{ url('store') }}"><button class='btn btn-primary float-end '>Back to home</button></a>
       
</div>
</body>
</html>