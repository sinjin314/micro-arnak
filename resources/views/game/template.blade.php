@extends('layouts.template')

@section('title')
    @yield('title')
@endsection


@section('body')
    <div class="page-wrapper with-navbar with-sidebar">

        <!-- Sticky alerts (toasts), empty container -->
        <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
        <div class="sticky-alerts"></div>


        @include('admin.navbar')
        @include('admin.sidebar')

        <div class="content-wrapper">

                @yield('content')

        </div>


    </div>
@endsection
