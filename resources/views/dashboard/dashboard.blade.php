@extends('dashboard.dashboardLayouts.dashboardApp')
@section('title', 'Dashboard - LifeCare')
@section('dashboard')


<div>

  <!-- Main Content -->
  <main class=" p-6">
    <!-- Page Header -->
    <header class="mb-8">
      <h1 class="text-3xl font-semibold">Dashboard </h1>
    </header>

    <!-- Content -->
    <div class="bg-white p-6 rounded-lg shadow-xl">
      <!-- User Profile -->
      <div id="userProfile">
        <div class="flex items-center justify-between mb-6">
          <h2 class="text-2xl font-semibold">User Profile</h2>
          <button id="editProfileBtn" class="text-blue-600 hover:underline"><a href="{{url('edit-profile')}}">Edit Profile</a></button>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <p class="text-gray-600 font-semibold">Name:</p>
            <p id="userName">{{$data->name}}</p>
          </div>
          <div>
            <p class="text-gray-600 font-semibold">Email:</p>
            <p id="userEmail">{{ $data->email }}</p>
          </div>
          <!-- Add more user details as needed -->
        </div>
      </div>


      <!-- Edit Profile Form (Hidden by Default) -->
      <div id="editProfileForm" class="hidden">
        <!-- Form for editing user details -->
        <form method="POST">
          @csrf
          @method('PUT')

          <div class="mb-4">
            <label for="name" class="block text-gray-600 font-semibold">Name:</label>
            <input type="text" name="name" id="editName" value="{{ $data->name }}" class="form-input">
          </div>

          <div class="mb-4">
            <label for="email" class="block text-gray-600 font-semibold">Email:</label>
            <input type="email" name="email" id="editEmail" value="{{ $data->email }}" class="form-input">
          </div>

          <!-- Add more input fields for other user details -->

          <div class="mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Changes</button>
          </div>
        </form>
      </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-xl mt-10">


      <div id="userProfile">
        <div class="flex items-center justify-between mb-6">
          <h2 class="text-2xl font-semibold">Multiple User Profile</h2>
          <!-- <button id="editProfileBtn" class="text-blue-600 hover:underline">Edit Profile</button> -->
        </div>



        <table class="table">

          <thead>
            <tr>

              <th>Name</th>
              <th>Email</th>
              <th>Delete</th>
            </tr>
          </thead>
          <!-- ... -->
          @foreach($allData as $user)
          <tbody>
            <tr class="bg-base-200 @if ($data->email === $user->email) bg-green-100 @endif">
              <th>{{$user->name}}</th>
              <th>{{$user->email}}</th>
              <th>
                @if ($data->email !== $user->email)
                <form method="POST" action="{{ route('deleteUser', $user->id) }}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-error hover:text-white" type="submit">Delete</button>
                </form>
                @else
                <button class="btn btn-active btn-accent text-white">Active</button>
                @endif
              </th>
            </tr>
          </tbody>
          @endforeach


          <!-- ... -->

        </table>

      </div>
    </div>
  </main>



</div>

@endsection