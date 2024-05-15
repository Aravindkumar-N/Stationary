@extends('layout.index')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h2>Sales Details</h2></div>
  <div class="card-body">
   
  @if($sales)
            <h5 class="card-title">Customer Name : @foreach($customers as $customer)
                  @if ($customer->id == $sales->customer_id)
                      {{ $customer->customer_name }}
                  @endif 
              @endforeach</h5>

            <p class="card-text">Invoice Number: {{ $sales->invoice_no }}</p>
            <p class="card-text">Customer Id : {{ $sales->customer_id }}</p>
            <p class="card-text">Total price : {{ $sales->total_price }} </p>
            
        @else
            <p>Store not found.</p>
        @endif

        <table class="table table-hover">
   <thead>
     <tr>
     <th>ID</th>
       <th>Product Name</th>
       <th>Quantity</th>
       <th>Unit Price</th>
       <th>Total Price</th>
      
       
     </tr>
   </thead>
   <tbody>
    @foreach ($sale_items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> @foreach ($stores as $store)
                                       @if ($store->id == $item->item_id)
                                    {{ $store->name }}  
                                    @endif 
                                    @endforeach </td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->unit_price }}</td>    
                                        <td>{{ $item->total_price }}</td>                                                                
                                    </tr>
                                @endforeach
                                </tbody>  
                                <tfoot>
            <tr class="bg-secondary text-white">
                <td colspan="4" class="text-right"><strong>Total:</strong></td>
                <td>{{ $total_price_sum }}</td>
            </tr>
        </tfoot>
</table>  

    </div>
       
    </hr>
    <!-- <a href="{{ url('sale') }}"><button class='btn btn-primary '>Back to home</button></a> -->
  
  </div>
</div>
@endsection