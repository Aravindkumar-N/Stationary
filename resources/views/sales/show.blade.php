  @extends('layout.index')
  @section('content')
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
              <tr>
                <td colspan="4" class="text-right"><strong></strong></td>
                <td> <a href="{{ url('/addcart/'. $sales->id) }}"><button type='submit'class='btn btn-primary'>Click to add</button></a></td>
              </tr>
          </tfoot>
  </table>  

      </div>
        
      </hr>
      <a href="{{ url('/addcart/invoice/'. $sales->id) }}"><button type='submit' target='_blank'class='btn btn-danger float-end mx-1'>View Invoice</button></a>
      <a href="{{ url('/addcart/invoice/'. $sales->id.'/generate') }}"><button type='submit' class='btn btn-warning float-end mx-1'>Download Invoice</button></a>
    </div>
  </div>
  @endsection
  @section('styles')
  <style>
    @media print {
      body * {
        visibility: hidden;
      }
      .card, .card * {
        visibility: visible;
      }
      .card {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        margin: 0;
        padding: 0;
      }
      .card-header {
        text-align: center;
      }
      .card-header::before {
        content: url('path_to_your_logo.png'); /* Add your logo path here */
        display: block;
        margin-bottom: 10px;
      }
      .card-footer {
        display: none; /* Hide elements that are not needed in print */
      }
    }
  </style>
  @endsection