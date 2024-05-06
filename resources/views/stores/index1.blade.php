<h1>{{ $category->name }} Stores</h1>

@foreach ($stores as $store)
    <div>
        <h2>{{ $store->name }}</h2>
        <!-- Display other store information -->
    </div>
@endforeach