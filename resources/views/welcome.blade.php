@extends('layouts/master')

@section('content')

    {{-- @include('components/preloader') --}}

    @include('components/nav')

    @include('partials/home')

    @include('partials/about')
    
    @include('partials/blog')
    
    @include('partials/work')

    @include('partials/contact')

    @include('components/footer')

    @include('components/modal')


@endsection