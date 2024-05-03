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
  <h2>Your Item</h2>
  <form action="addsubmit" method="post">
    @csrf
  <div class="mb-3 mt-3">
      <label for="name">Item Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter the Item" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
    </div>
    <div class="mb-3 mt-3">
      <label for="quantity">Quantity:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity">
    </div>
    <div class="mb-3">
      <label for="add">Description:</label>
      <input type="textarea" class="form-control" id="description" placeholder="Enter The Description" name="description">
    </div>
    
   <input type="submit" class="btn btn-primary" name="" value="submit" >
  </form>
</div>
</body>
</html>