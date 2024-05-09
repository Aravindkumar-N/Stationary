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
    <center><h1> NEOPHRON store </h1></center>
    <div>
    <div class="container mt-3">
   
   <a href="{{ url('/store/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
   <div class="dropdown float-end">
 <button class="btn btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Catagories
 </button>
 <ul class="dropdown-menu">
 <tbody>                   
       @foreach ($category as $item)
     <li><a class="dropdown-item" href="{{url('categories/' . $item->id .'/stores') }}">
     <p> {{ $item->catname }}</p>
     @endforeach
   </a></li>
   <!--<li><a class="dropdown-item" href="#">Note Books</a></li>
   <li><a class="dropdown-item" href="#">Guides</a></li>
   <li><a class="dropdown-item" href="#">Bags</a></li>
   <li><a class="dropdown-item" href="#">daily things</a></li> -->
   <li><a class="dropdown-item" href="{{ url('/cat') }}">Add categories</a></li>
 </ul>
</div>
 
<h2>Product details</h2>
 <p>Here the details of the products</p>            
 <table class="table table-hover">
   <thead>
     <tr>
     <th>ID</th>
       <th>Item Name</th>
       <th>price</th>
       <th>Quantity</th>
       <th>Description</th>
       <th>Operations</th>
     </tr>
   </thead>
   <tbody>
   @foreach($store as $item)
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td>{{ $item->name }}</td>
                                       <td>Rs. {{ $item->price }}</td>
                                       <td>{{ $item->quantity }}</td>
                                       <td>{{ $item->description }}</td>

                                       <td>
                                           <!-- <a href="{{ url('/store/'. $item->id) }}" title="View Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                           <a href="{{ url('/store/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           <form method="POST" action="{{ url('/store' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                               {{ method_field('DELETE') }}
                                               {{ csrf_field() }}
                                               <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                           </form>
                                       </td>
                                   </tr>
                               @endforeach
                               </tbody>   
                               
                          
                       
                              
</div>
</div>
    </div>
    


</body>

</html>