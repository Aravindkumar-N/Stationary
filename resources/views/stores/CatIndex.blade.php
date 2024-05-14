@extends('layout.index')
@section('content')

<body>
   
    <div class="container mt-3">
    <a href="{{ url('/cat/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
    
 
  
<h2>User details</h2>
  <p>Here the details of the user which are inserted in previous page</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Available Products</th>
        <th>Operations</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($ProductCount as $category)
      <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $category->catname }}</td>
      <td>{{ $category->product_count }}</td>
      <td>
       
        <a href="{{ url('/cat/' . $category->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
        <form method="POST" action="{{ url('/store/cat' . '/' . $category->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
             <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
         </form>
       </td>
       </tr>
                        
             
         @endforeach
        </tbody>         
                   
        <a href="{{ url('store') }}"><button class='btn btn-primary float-end '>Back to home</button></a>
        <!-- @foreach ($ProductCount as $category)
    <p>{{ $category->catname }} ({{ $category->product_count }} products)</p>
@endforeach    -->
</div>
</body>
@endsection
