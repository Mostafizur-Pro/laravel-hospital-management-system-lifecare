@extends('layouts.app')
@section('title', 'About - LifeCare')
@section('content')

<div>

    @section('cover', 'About Us')
    @include('index/cover')
    @include('index/our-medical')
    @include('index/fact')
    @include('index/appointment')
</div>

@endsection