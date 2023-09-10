@extends('layouts.app')
@section('title', 'Product Details - LifeCare')
@section('content')

<div class="container mx-auto p-4">
    <div class="bg-white shadow-lg rounded-lg p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Image -->
            <div>
                <img src="{{ asset($product['image_url']) }}" alt="{{ $product['name'] }}" class="mx-auto h-64 w-64 object-cover rounded-md">
            </div>

            <!-- Product Details -->
            <div>
                <h1 class="text-3xl font-semibold">{{ $product['name'] }}</h1>
                <p class="text-gray-600">{{ $product['description'] }}</p>
                <div class="mt-4">
                    <p class="text-lg text-green-600 font-semibold">${{ $product['price'] }}</p>
                    <p class="text-sm text-gray-500">In Stock: {{ $product['stock'] }}</p>
                </div>
            </div>
        </div>
        
        <!-- Back to Products Link -->
        <div class="mt-8">
            <a href="{{ route('shop') }}" class="text-blue-600 hover:underline">Back to Products</a>
        </div>
    </div>
</div>

@endsection
