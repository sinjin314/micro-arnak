@extends('layout.template1')

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Liste des jeux</h2>
            </div>
        </div>

    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead class="thead-dark">

        </thead>

        <tbody>
        @foreach ($games as $game)



            <tr>

                    <!-- Second card (parent container's width changed using utility classes) -->
                    <div class=" w-400  mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
                        <div class="card">
                            <h2 class="card-title">
                                {{ $game->name }}
                            </h2>
                            <p>{{ $game->price }}€</p>
                        <h6>{{ $game->studio }}</h6>
                            <p class="text-muted">
                                {{ $game->desc }}
                            </p>
                            <div class="text-right"> <!-- text-right = text-align: right -->
                                <a href="#" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>

                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection