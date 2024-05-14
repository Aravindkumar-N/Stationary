
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Items</title>
</head>
<body>
<div class="container mt-3">
  <h2>Your Product</h2>
  <form action="{{ url('sale') }}" method="post">
    @csrf
 
    <div class="form-group row">    
     <label for="role" >Customer Name</label>
         <div class="form-control ">
              <select class="form-control" id="customer_id" name="customer_id" required focus>
              @foreach ($customers as $customer)
                  <option value="{{ $customer->id }}"  selected>{{ $customer->customer_name }}</option>        
                  @endforeach 
                  <option value="Select categoy" disabled selected>Select Customer Name</option>    
              </select>
         </div>
</div>
    <div class="mb-3 mt-3">
      <label for="total_price">Total price:</label>
      <input type="number" class="form-control" id="total_price" placeholder="Enter total price" name="total_price">
    </div>
   
    
   <input type="submit" class="btn btn-primary" name="" value="submit" >
  </form><a href="{{ url('store') }}"><button class='btn btn-primary float-end '>Back to home</button></a>
  
</div>
</body>
</html>