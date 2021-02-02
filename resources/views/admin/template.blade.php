@extends('layouts.template')

@section('title')
    @yield('title')
@endsection


@section('body')
    <div class="page-wrapper with-navbar with-sidebar">

        <!-- Sticky alerts (toasts), empty container -->
        <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
        <div class="sticky-alerts">
                @if(session('success'))
                    <div style="margin-top: 1%" class="alert alert-success" role="alert">
                        <button class="close" data-dismiss="alert" type="button" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                @endif
        </div>

        @if(auth()->user()->is_admin == 1)

                @include('admin.navbar')
                @include('admin.sidebar')

                <div class="content-wrapper">

                        <div class="sticky-alerts">
                                @if(session('success'))
                                    <div style="margin-top: 1%" class="alert alert-success" role="alert">
                                        <button class="close" data-dismiss="alert" type="button" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('success') }}
                                    </div>
                                @endif
                        </div>
                        
                        @yield('content')

                </div>
        @else

            <h1> error </h1>

        @endif

    </div>
@endsection
