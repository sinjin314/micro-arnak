@extends('layouts.template')

@section('title')
    user index
@endsection


@section('body')
    <div class="page-wrapper with-navbar with-sidebar">


        <!-- Sticky alerts (toasts), empty container -->
        <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
        <div class="sticky-alerts"></div>

        @include('user.navbar')

    </div>
@endsection
