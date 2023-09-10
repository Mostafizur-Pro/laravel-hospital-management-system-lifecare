@extends('layouts.app')
@section('title', 'About - LifeCare')
@section('content')

<div>
    @section('cover', 'Shop')
    @include('index/cover')

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold mb-4">Hospital Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach($products as $product)
            <div class="bg-white shadow-lg rounded-lg p-4">
                <img src="{{ asset($product['image_url']) }}" alt="{{ $product['name'] }}" class="mx-auto h-32 w-32 object-cover rounded-full">
                <h2 class="text-xl font-semibold mt-2">{{ $product['name'] }}</h2>
                <p class="text-gray-600">{{ $product['description'] }}</p>
                <div class="mt-4">
                    <p class="text-lg text-green-600 font-semibold">${{ $product['price'] }}</p>
                    <p class="text-sm text-gray-500">In Stock: {{ $product['stock'] }}</p>
                </div>
                <div class="mt-4">
                    <a href="{{ route('product.details', ['id' => $product['id']]) }}" class="text-blue-600 hover:underline">Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Aside Section -->
    <aside class="container mx-auto p-4 mt-4 bg-gray-200 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-2">Aside Section</h2>
        <p>This is the aside section where you can add additional content, such as related products, advertisements, or any other information you want to display alongside your hospital products.</p>
    </aside>
</div>

@endsection
