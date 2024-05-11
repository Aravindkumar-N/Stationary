@foreach ($stores as $store)
    <div>
        <h2>{{ $store->name }}</h2>
        <p>Price: {{ $store->price }}</p>
        <p>Quantity: {{ $store->quantity }}</p>
        <p>Description: {{ $store->description }}</p>
        <p>Category: {{ $categories->catname }}</p>
    </div>
@endforeach

    <!-- @foreach ($products as $product)
    <h3>{{ $product->name }}</h3>
    <p>Price: {{ $product->price }}</p>
    <p>Quantity: {{ $product->quantity }}</p>
    <p>Description: {{ $product->description }}</p>
    <p>Category: {{ $product->category->catname }}</p>
@endforeach
     -->