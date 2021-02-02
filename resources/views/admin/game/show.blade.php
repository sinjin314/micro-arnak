@extends('admin.template')

@section('title')
        show games
@endsection

@section('content')

        <div class="row mt-3">
            <div class="col-md-8">
                <div class="float-left">
                    <h2>{{ $game->name }}</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="float-right">
                    <a class="btn btn-outline-primary" href="{{ route('admin.game.list') }}">Retour</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Studio:</strong>
                    {{ $game->studio }}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Prix:</strong>
                    {{ $game->price }}€
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Type</strong>
                    {{ $game->type }}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>platform:</strong>
                    {{ $game->platform }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Pegi:</strong>
                    {{ $game->pegi }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Game Publication date:</strong>
                    {{ $game->date_publication }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $game->description }}
                </div>
            </div>
        </div>

@endsection
