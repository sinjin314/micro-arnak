@extends('admin.template')

@section('title')
    Admin index
@endsection

@section('content')



        <!-- Sticky alerts (toasts), empty container -->
        <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
        <div class="sticky-alerts"></div>

        @if(auth()->user()->is_admin == 1)


        @else

            <h1>What the hell are you doing here ? </h1>

        @endif

    </div>
@endsection
