<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Neophron</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('sale') }}"><h2>NEOPHRON</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  justify-content-end px-4" id="collapsibleNavbar">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link" href="{{ url('store') }}"><h5>Home</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('register')}}"><h5>Register</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}"><h5>Login</h5></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('store')}}"><h5>Products</h5></a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="{{url('saleItem')}}"><h5>Sale Items</h5></a>
        </li> 
        <li class="nav-item dropdown">
          
          <button class="btn btn-dark btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customers
            </button> 
            <ul class="dropdown-menu dropdown-menu-dark">                  
                <li><a class="dropdown-item" href="{{ url('/customer') }}">Customer Details</a></li>   
                <li><a class="dropdown-item" href="{{ url('/group') }}">Group Details</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
        <button class="btn btn-dark btn-lg dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product Details
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                   
                @foreach ($categories as $item)
                <li><a class="dropdown-item" href="{{url('categories/' . $item->id .'/stores') }}">
                <p> {{ $item->catname }}</p>
                @endforeach
                </a></li>
                <li><a class="dropdown-item" href="{{ url('/cat') }}">Add categories</a></li>
            
            </ul>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <div class="container py-4">
        @yield('content')
    </div>



   
</html>