<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign_up</title>
</head>
<body>

    
    <div class="container p-5 my-5 bg-dark text-white" style="width:600px;text-align:center;">
    <h1 style="color:white;"> Sign Up</h1>
   

    <form method='post' action="{{url('login_store')}}">
    @csrf
    <div class="row mb-3 mt-5" >
    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="inputname" required>
    </div>
  </div>
  <div class="row mb-3 " >
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name = "email" id="inputEmail3" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name = "password" id="password" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="password_confirmation" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name = "password_confirmation" id="password_confirmation" required>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign Up</button>

  
 
</form> 
<p>Already have an account? <a href="{{url('login')}}">Click here to sign in</a></p>
    </div>

</body>
</html>


