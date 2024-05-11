@foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->catname }}</td>
                                                                                                
                                    </tr>
                                @endforeach




                                <div class="dropdown float-end">
 <button class="btn btn-secondary dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Catagories
 </button>
 <ul class="dropdown-menu">
 <tbody>                   
       @foreach ($categories as $item)
     <li><a class="dropdown-item" href="{{url('categories/' . $item->id .'/stores') }}">
     <p> {{ $item->catname }}</p>
     @endforeach
   </a></li>
   <!--<li><a class="dropdown-item" href="#">Note Books</a></li>
   <li><a class="dropdown-item" href="#">Guides</a></li>
   <li><a class="dropdown-item" href="#">Bags</a></li>
   <li><a class="dropdown-item" href="#">daily things</a></li> -->
   <li><a class="dropdown-item" href="{{ url('/cat') }}">Add categories</a></li>
 </ul>
</div>