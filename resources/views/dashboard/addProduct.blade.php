@extends('dashboard.dashboardLayouts.dashboardApp')
@section('title', 'Add Product - LifeCare')
@section('dashboard')
<h1 class="text-3xl font-semibold mb-6">Create Product</h1>
@if ($errors->any())
        <div class="alert alert-danger bg-orange-200 ">
          <h1>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
          </h1>
        </div>
        @endif

<form method="POST" action="{{ route('products') }}" enctype="multipart/form-data" class="space-y-6">
    @csrf
    <div class="flex flex-col space-y-1">
        <label for="title" class="text-gray-600">Title</label>
        <input type="text" class="input input-bordered" id="title" name="title" required>
    </div>

    <div class="flex flex-col space-y-1">
        <label for="oldprice" class="text-gray-600">Old Price</label>
        <input type="number" class="input input-bordered" id="oldprice" name="oldprice" required>
    </div>

    <div class="flex flex-col space-y-1">
        <label for="newprice" class="text-gray-600">New Price</label>
        <input type="number" class="input input-bordered" id="newprice" name="newprice" required>
    </div>

    <div class="flex flex-col space-y-1">
        <label for="rating" class="text-gray-600">Rating</label>
        <input type="number" step="0.1" class="input input-bordered" id="rating" name="rating" required>
    </div>

    <div class="flex flex-col space-y-1">
        <label for="image" class="text-gray-600">Image</label>
        <input type="file" class="input input-bordered" id="image" name="image" required>
    </div>
    
    <span class="text-red-400 ">@error('image') {{$message}} @endError</span>
    <div class="flex flex-col space-y-1">
        <label for="details" class="text-gray-600">Details</label>
        <textarea class="textarea textarea-bordered" id="details" name="details" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-accent">Create</button>
</form>
@endsection
