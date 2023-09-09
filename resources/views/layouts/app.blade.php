<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Default Title')</title>


    <link rel="stylesheet" href="/public/assets/our-doctor.css">
    <link rel="stylesheet" href="/public/assets/our-doctor.css">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('layouts.navbar');
    
    @yield('content')
    @include('layouts.footer');
    
    
</body>
</html>