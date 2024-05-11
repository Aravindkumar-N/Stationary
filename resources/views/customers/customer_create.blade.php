<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Your Details</title>
</head>
<body>
<div class="container mt-3">
  <h2>Your Product</h2>
  <form action="{{ url('customer') }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
      <label for="customer_name"> Name:</label>
      <input type="text" class="form-control" id="customer_name" placeholder="Enter your Name" name="customer_name">
    </div>
    <div class="mb-3 mt-3">
      <label for="group_id">Select your Group:</label>
      <input type="number" class="form-control" id="group_id" placeholder="Group name" name="group_id">
    </div>
    <div class="mb-3 mt-3">
      <label for="mobile">Mobile No:</label>
      <input type="number" class="form-control" id="mobile" placeholder="Enter your Mobile No." name="mobile">
    </div>
    <div class="mb-3">
      <label for="email">Email Id:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
    </div>
    <div class="mb-3">
      <label for="gst_number">GST Number:</label>
      <input type="number" class="form-control" id="gst_number" placeholder="Enter your GST number" name="gst_number">
    </div>
    
    <div class="mb-3">
      <label for="abilling_addressd">Billing Address:</label>
      <input type="textarea" class="form-control" id="billing_address" placeholder="Enter Billing Address" name="billing_address">
    </div>
    <div class="mb-3">
      <label for="shipping_address">Shipping Address:</label>
      <input type="textarea" class="form-control" id="shipping_address" placeholder="Enter Shipping Address" name="shipping_address">
    </div>
    <div class="mb-3">
      <label for="add">Status:</label><br>
      <select name="status"class="form-control">
    <option value="1" {{ $status ? 'selected' : '' }}>Active</option>
    <option value="0" {{ $status ? '' : 'selected' }}>Inactive</option>
</select>
    </div>
    
    
    
    
   <input type="submit" class="btn btn-primary" name="" value="submit" >
  </form>
</div>
</body>
</html>