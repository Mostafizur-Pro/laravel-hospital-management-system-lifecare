@extends('dashboard.dashboardLayouts.dashboardApp')
@section('title', 'All Products - LifeCare')
@section('dashboard')
<h1 class="text-3xl font-semibold mb-6">All Products</h1>

@if(count($products) > 0)
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Old Price</th>
            <th>New Price</th>
            <th>Rating</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>
            <img src="{{ asset('path_to_your_image_directory/' . $product->image) }}" alt="{{ $product->title }} Image">


            
            </td>

            <td>{{ $product->title }}</td>
            <td>{{ $product->oldprice }}</td>
            <td>{{ $product->newprice }}</td>
            <td>{{ $product->rating }}</td>
            <td>{{ $product->details }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-error hover:text-white" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@else
<p>No products available.</p>
@endif

@endsection