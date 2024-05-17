<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #6</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
            <th width="50%" colspan="2">
                    <h2 class="text-start">
                        <img src="{{ asset('image/neop_logo.png') }}" alt="NEOPHRON TRADINGS Logo" style="max-width: 100%; height: auto;">
                    </h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Invoice Id: {{$sales->invoice_no}}</span> <br>
                    <span>Date: {{$sales->created_at}}</span> <br>
                    <span>Zip code : 560077</span> <br>
                    <span>Address: @foreach($customers as $customer)
                  @if ($customer->id == $sales->customer_id)
                      {{ $customer->billing_address }}
                  @endif 
              @endforeach</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Order Id:</td>
                <td> {{$sales->id}}</td>

                <td>Full Name:</td>
                <td> @foreach($customers as $customer)
                  @if ($customer->id == $sales->customer_id)
                      {{ $customer->customer_name }}
                  @endif 
              @endforeach</td>
            </tr>
            <tr>
                <td>Tracking Id/No.:</td>
                <td>Neophron-CRheOqspbA</td>

                <td>Email Id:</td>
                <td>@foreach($customers as $customer)
                  @if ($customer->id == $sales->customer_id)
                      {{ $customer->email}}
                  @endif 
              @endforeach</td>
            </tr>
            <tr>
                <td>Ordered Date:</td>
                <td>{{$sales->created_at}}</td>

                <td>Phone:</td>
                <td>@foreach($customers as $customer)
                  @if ($customer->id == $sales->customer_id)
                      {{ $customer->mobile}}
                  @endif 
              @endforeach</td>
            </tr>
            <tr>
                <td>Payment Mode:</td>
                <td>Cash on Delivery</td>

                <td>Address:</td>
                <td>@foreach($customers as $customer)
                  @if ($customer->id == $sales->customer_id)
                      {{ $customer->shipping_address }}
                  @endif 
              @endforeach</td>
            </tr>
            <tr>
                <td>Order Status:</td>
                <td>completed</td>

                <td>Pin code:</td>
                <td>566999</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>S.No</th>
                
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($sale_items as $item)
            <tr>
                <td width="10%">{{$loop->iteration}}</td>
                
                <td>
                @foreach ($stores as $store)
                                    @if ($store->id == $item->item_id)
                                    {{ $store->name }}  
                                    @endif 
                 @endforeach
                </td>
                <td width="10%">{{ $item->unit_price }}</td>
                <td width="10%">{{ $item->quantity }}</td>
                <td width="15%" class="fw-bold">{{ $item->total_price }}</td>
            </tr>
           
          
        @endforeach
        <tr>
                <td colspan="3" class="total-heading">Total Amount - <small>Inc. all vat/tax</small> :</td>
                <td colspan="2" class="total-heading">{{ $total_price_sum }} ({{ \App\Helpers\NumberToWords::convert($total_price_sum) }} Rupees only)</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        Thank your for shopping with Neophron Tradings
    </p>

</body>
</html>