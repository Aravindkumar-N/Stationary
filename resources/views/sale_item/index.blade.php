@extends('layout.index')
@section('content')
 
 

<body>
    
    <div>
    <div class="container mt-3">
   
   <a href="{{ url('/saleItem/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
   
 
<h2>Product details</h2>
 <p>Here the details of the products</p>            
 <table class="table table-hover">
   <thead>
     <tr>
     <th>ID</th>
       <th>Sale Id</th>
       <th>Item Id</th>
       <th>Quantity</th>
       <th>unit_price</th>
       <th>total_price</th>
       <th>Operations</th>
     </tr>
   </thead>
   <tbody>
   @foreach($sale_items as $item)
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                  
                                       <td>{{ $item->sale_id }}</td>
                                       <td> @foreach ($stores as $store)
                  {{ $store->name }}   
                  @endforeach </td>
                                       <td>{{ $item->quantity }}</td>
                                       <td>{{ $item->unit_price }}</td>
                                       <td>{{ $item->total_price }}</td>
                                     
                                     


                                       <td>
                                           <!-- <a href="{{ url('/store/'. $item->id) }}" title="View Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
                                           <a href="{{ url('/saleItem/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           <form method="POST" action="{{ url('/saleItem' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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

@endsection