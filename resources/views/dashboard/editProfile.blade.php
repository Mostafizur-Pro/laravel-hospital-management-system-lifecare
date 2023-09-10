@extends('dashboard.dashboardLayouts.dashboardApp')
@section('title', 'Profile Edit - LifeCare')
@section('dashboard')

<div>
  <!-- Main Content -->
  <main class="p-6">
    <!-- Page Header -->
    <header class="mb-8">
      <h1 class="text-3xl font-semibold">Edit User Profile</h1>
    </header>

    <!-- Content -->
    <div class="bg-white p-6 rounded-lg shadow-xl">
      <!-- Edit Profile Form -->
      <div id="editProfileForm">
        <!-- Form for editing user details -->
        <form method="POST" action="{{ route('updateProfile') }}">
          @csrf
          @method('PUT')

          <div class="mb-4">
            <label for="name" class="block text-gray-600 font-semibold">Name:</label>
            <input type="text" name="name" id="editName" value="{{ $data->name }}" class="form-input  input input-bordered input-accent">
          </div>

          <div class="mb-4">
            <label for="email" class="block text-gray-600 font-semibold">Email:</label>
            <input type="email" name="email" id="editEmail" value="{{ $data->email }}" class="form-input input input-bordered input-accent" disabled >
          </div>

          <!-- Add more input fields for other user details you want to edit -->

          <div class="mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>

@endsection
