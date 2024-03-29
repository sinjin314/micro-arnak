@extends('layouts.app')

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Add New Game</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('games.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="image">
        </div>
        <div class="form-group">
            <label for="studio">Studio:</label>
            <input type="text" class="form-control" id="studio" name="studio" placeholder="Studio">
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea class="form-control" id="address" name="desc" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="platform">Plateforme:</label>
            <input type="text" class="form-control" id="platform" name="platform" placeholder="Plateforme">
        </div>
        <div class="form-group">
            <label for="pegi">Pegi:</label>
            <input type="text" class="form-control" id="pegi" name="pegi" placeholder="Pegi">
        </div>
        <div class="form-group">
            <label for="price">Prix:</label>
            <textarea class="form-control" id="address" name="price" placeholder="Prix"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date de sortie:</label>
            <textarea class="form-control" id="address" name="date" placeholder="Date de sortie"></textarea>
        </div>
        <div class="form-group">
            <label for="nmoy">Note moyenne sur 10:</label>
            <textarea class="form-control" id="address" name="nmoy" placeholder="Note moyenne sur 10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
