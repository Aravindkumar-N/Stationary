@extends('layout.index')
@section('content')
 
 

<body>
    
    <div>
    <div class="container mt-3">
   
   <a href="{{ url('/sale/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
   
 
<h2>Sales details</h2>
 <p>Here the details of the sales</p>            
 <table class="table table-hover">
   <thead>
     <tr>
     <th>ID</th>
       <th>Customer Name</th>
       <th>Invoice number</th>
       <th>Total Price</th>
      
       <th>Operations</th>
     </tr>
   </thead>
   <tbody>
   @foreach($sales as $item)
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td>
              @foreach($customers as $customer)
                  @if ($customer->id == $item->customer_id)
                      {{ $customer->customer_name }}
                     
                  @endif 
              @endforeach
          </td>
                                       <td>{{ $item->invoice_no }}</td>
                                       <td>{{ $item->total_price }}</td>
                                     
                                     


                                       <td>
                                           <a href="{{ url('/sale/'. $item->id) }}" title="View Item"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Sale Items</button></a>
                                           <a href="{{ url('/sale/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           <form method="POST" action="{{ url('/sale' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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