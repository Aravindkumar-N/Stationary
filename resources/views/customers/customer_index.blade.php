<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Customer page</title>
</head>
<body>
<div class="container mt-3">
<h2>Customer details</h2>
 <p>Here the details of the Customer</p>            
 <table class="table table-hover">
   <thead>
     <tr>
     <th>ID</th>
       <th>Customer Name</th>
       <th>Group</th>
       <th>Mobile No.</th>
       <th>Email Id</th>
       <th>Billing Address</th>
       <th>Shipping Address</th>
     </tr>
   </thead>
   <tbody>
   @foreach($customers as $item)
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td>{{ $item->customer_name }}</td>
                                       <td>
              @foreach($groups as $group)
                  @if ($group->id == $item->group_id)
                      {{ $group->groupName }}
                     
                  @endif 
              @endforeach
          </td>
                                       <td>{{ $item->email }}</td>
                                       <td>{{ $item->billing_address }}</td>
                                       <td>{{ $item->shipping_address }}</td>
                                      

                                       <td>
                                           <!-- <a href="{{ url('/store/'. $item->id) }}" title="View Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                           <a href="{{ url('/customer/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           <form method="POST" action="{{ url('/customer' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                               {{ method_field('DELETE') }}
                                               {{ csrf_field() }}
                                               <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                           </form>
                                       </td>
                                   </tr>
    @endforeach
                               </tbody>   

                               </tbody>   
                               
                          
                       
                              
</div>
</div>
    </div>
    <a href="{{ url('/customer/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
</div>
</body>
</html>