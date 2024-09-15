@extends('layout')

@section('content')
    <div class="products">
        @foreach($products as $product)
            <div class="product">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
            </div>
        @endforeach
    </div>
@endsection
