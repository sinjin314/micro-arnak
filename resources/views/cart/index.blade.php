@extends('layouts.app')

@section('content')
    @if (Cart::count() > 0)

        <div class="px-4 px-lg-0" style="margin-top: 5%">
            <h1 style="text-align: center">Votre panier</h1>
            <div class="pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Jeu</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Prix</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Quantité</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Supprimer</div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (Cart::content() as $games)
                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="{{ $games->model->image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="{{ route('games.show') }}" class="text-dark d-inline-block align-middle">{{ $games->model->name }}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: {{ $games->model->genre }}</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong>{{ $games->model->getPrice() }}</strong></td>
                                            <td class="border-0 align-middle"><strong>1</strong></td>
                                            <td class="border-0 align-middle">
                                                <form action="{{ route('cart.destroy', $games->rowId) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- End -->
                        </div>
                    </div>
                    <div class="row p-4 bg-white rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions pour le vendeur</div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Si vous souhaitez ajouter des précisions à votre commande,<br> merci de les rentrer dans le champ ci-dessous</p>
                                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Détails de la commande
                            </div>
                            <div class="p-4">
                                <p class="font-italic mb-4">Les frais éventuels de livraison seront calculés suivant les informations que vous avez transmises.</p>
                                <ul class="list-unstyled mb-4">
                                   <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong>{{ Cart::subtotal() }}</strong></li>
                                    {{-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li> --}}
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong>{{ Cart::tax() }}</strong></li>
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">{{ Cart::total() }}</h5>
                                    </li>
                                </ul><a href="{{ route('checkout.index') }}" class="btn btn-dark rounded-pill py-2 btn-block"><i class="fa fa-credit-card" aria-hidden="true"></i> Passer à la caisse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12">
            <h1 style="text-align: center; margin-top: 5%;">Votre panier est vide pour le moment.</h1>
            <p style="text-align: center; margin-top: 5%;">Mais vous pouvez visiter la <a href="{{ route('games.index') }}">boutique</a> pour faire votre shopping.
            </p>
        </div>
    @endif

@endsection
