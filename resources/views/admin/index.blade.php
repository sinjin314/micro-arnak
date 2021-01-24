@extends('layouts.template')

@section('title')
    user index
@endsection


@section('body')
    <div class="page-wrapper with-navbar with-sidebar">


        <!-- Sticky alerts (toasts), empty container -->
        <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
        <div class="sticky-alerts"></div>

        @if(auth()->user()->is_admin == 1)


        @else

            <h1>que fais tu la enculer ? </h1>

        @endif

    </div>
@endsection
