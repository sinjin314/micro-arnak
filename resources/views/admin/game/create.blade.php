@extends('admin.template')

@section('title')
        create game
@endsection


@section('content')
        <div class="card w-400 mw-full m-0 position-relative align-center ">
                @include('game.form')
        </div>
@endsection
