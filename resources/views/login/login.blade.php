<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign In</title>
</head>
<body>
  
   
<div class="container p-5 my-5 bg-dark text-white" style="width:600px;text-align:center;">
    <h1 style="color:white;"> Sign In</h1>
    <form method='post'action="{{url('/authenticate')}}" >
     @csrf
  <div class="row mb-3 mt-5" >
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email"name='email'>
    </div>
  </div>
  <div class="row mb-3">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name='password'>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
  </form> 
  <p>Don't have an account?  <a href="{{url('register')}}">Click here to sign up</a></p>
  
  </div>
 

</body>
</html>
