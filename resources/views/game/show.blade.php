@extends('layout.template1')

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>{{ $games->name }}</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('games.index') }}">Retour</a>
            </div>
        </div>
    </div>

    <hr>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Studio:</strong>
                {{ $games->studio }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                {{ $games->price }}€
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Note:</strong>
                {{ $games->note }}/10
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $games->description }}
            </div>
        </div>

    </div>

@endsection
