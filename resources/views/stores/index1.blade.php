
@extends('stores.layout')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Category Name</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($stores as $store) {
    echo $store->name; // Assuming 'name' is a column in the 'stores' table
}
?>


            <!-- //  @foreach ($stores as $store)
            //    <tr>
                //   <td>{{ $loop->iteration }}</td>
//                   <td>{{ $store->name }}</td>
//                   <td>{{ $store->category }}</td>
// </tr>
//                   @endforeach 
    
 </tbody>

</table> -->