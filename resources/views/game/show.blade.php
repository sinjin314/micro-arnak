@extends('layouts.app')


@section('content')
    <div class="col-md-12" style="margin-top: 5%">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-3 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success"><h1>Jeu: {{ $games->name }}</h1></strong>
                <h5 class="mb-0">Genre: {{ $games->genre }} </h5>
                <hr>
                <p class="mb-auto text-muted">Description: {{ $games->description }}</p>
                <strong class="mb-auto font-weight-normal text-secondary">Prix: {{ $games->getPrice() }}</strong>
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $games->id }}">
                    <button type="submit" class="btn btn-success"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Ajouter ce jeu au panier</button>
                </form>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{ $games->image }}" alt="img du jeu">
            </div>
        </div>
    </div>
@endsection
