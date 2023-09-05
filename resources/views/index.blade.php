@extends('layouts.app')
@section('content')


<div>

@include('index/slider')

<div class="relative  ">
    @include('index/card')
</div>

<div class="mt-72">

</div>
@include('index/our-medical')
@include('index/our-services')


</div>

@endsection