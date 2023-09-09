@extends('layouts.app')
@section('title', 'Home - LifeCare')
@section('content')


<div>

@include('index/slider')

<div class="relative  ">
    @include('index/card')
</div>

<!-- <div class="mt-32">
    
</div> -->

  
    
@include('index/our-medical')
@include('index/our-services')
@include('index/our-doctor')
@include('index/our-pricing')


</div>

@endsection