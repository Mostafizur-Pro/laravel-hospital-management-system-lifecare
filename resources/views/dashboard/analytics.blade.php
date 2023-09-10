@extends('dashboard.dashboardLayouts.dashboardApp')
@section('title', 'Analytics - LifeCare')
@section('dashboard')
<div class="">
<div class="bg-white p-6 rounded-lg shadow-xl">
        <h1 class="text-3xl font-semibold mb-6">Analytics</h1>

        <!-- Add your analytics content here -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Example Analytics Cards -->
            <div class="bg-blue-100 p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Total Visits</h2>
                <p class="text-2xl font-bold">1,234</p>
            </div>

            <div class="bg-green-100 p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Conversion Rate</h2>
                <p class="text-2xl font-bold">5.67%</p>
            </div>

            <!-- Add more analytics cards or charts here -->
        </div>
    </div>

</div>
  
@endsection
