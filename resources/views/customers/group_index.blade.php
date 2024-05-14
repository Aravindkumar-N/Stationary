@extends('layout.index')
@section('content')
 

<body>
  
    <div class="container mt-3">
    
    
 
  
<h2>Groups</h2>
  <p>Groups details are here</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Group Name</th>
        <th>Group Code</th>
        <th>Group Members</th>
        <th>Operations</th>
        
      </tr>
    </thead><tbody>
    @foreach ($ProductCount as $group)
                                   <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td>{{ $group->groupName }}</td>
                                       <td>{{ $group->groupCode}}</td>
                                      
                                       <td>{{ $group->product_count }}</td>
                                       
                                      

                                       <td>
                                          
                                           <a href="{{ url('/group/' . $group->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           <form method="POST" action="{{ url('/group' . '/' . $group->id) }}" accept-charset="UTF-8" style="display:inline">
                                               {{ method_field('DELETE') }}
                                               {{ csrf_field() }}
                                               <button type="submit" class="btn btn-danger btn-sm" title="Delete Item" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                           </form>
                                       </td>
                                   </tr>
    @endforeach
                                
    <tbody>
         
                   
       
       
</div><div class="footer">

<a href="{{ url('/group/create') }}"><button type='submit'class='btn btn-primary'>Click to add</button></a>
</div>

</body>
@endsection
</html>