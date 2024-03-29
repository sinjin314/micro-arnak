@extends('admin.template')

@section('title')
    Edit game
@endsection

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Editer un jeu</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('game.index') }}">Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Wow!!</strong> Il y a eu un problème avec ce que vous avez entré.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('game.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $game->id }}" name="id">
    <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="{{ $game->name }}">
    </div>
    <div class="form-group">
        <label for="studio">Studio:</label>
        <input type="text" class="form-control" id="studio" name="studio" placeholder="Studio" value="{{ $game->studio }}">
    </div>
    <div class="form-group">
        <label for="genre">Genre:</label>
        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre" value="{{ $game->genre }}">
    </div>
    <div class="form-group">
        <label for="desc">Description:</label>
        <input class="form-control" id="address" name="desc" placeholder="Description"  value="{{ $game->desc }}" >
    </div>
    <div class="form-group">
        <label for="platform">Plateforme:</label>
        <input type="text" class="form-control" id="platform" name="platform" placeholder="Plateforme" value="{{ $game->platform }}">
    </div>
    <div class="form-group">
        <label for="pegi">Pegi:</label>
        <input type="text" class="form-control" id="pegi" name="pegi" placeholder="Pegi" value="{{ $game->pegi }}">
    </div>
    <div class="form-group">
        <label for="price">Prix:</label>
        <input class="form-control" id="address" name="price" placeholder="Prix" value="{{ $game->price }}">
    </div>

    <div class="form-group">
        <label for="nmoy">Note moyenne sur 10:</label>
        <input class="form-control" id="address" name="nmoy" placeholder="Note moyenne sur 10" value="{{ $game->nmoy }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

