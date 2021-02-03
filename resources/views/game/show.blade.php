@extends('layouts.app')


@section('content')
    <div class="col-md-12" style="margin-top: 5%">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-3 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"><h1>Jeu: Genshin Impact</h1></strong>
                <h5 class="mb-auto text-muted">studio: mihoyo </h5>
                <h5 class="mb-0">Genre: Rpg </h5>
                <hr>
                <p class="mb-auto text-muted">Description: Rpg au style d'animé japonnais</p>

                <strong class="mb-auto font-weight-normal text-secondary">Prix: 45€</strong>

            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ $games->image }}" alt="img du jeu">
            </div>
        </div>
    </div>

@endsection
