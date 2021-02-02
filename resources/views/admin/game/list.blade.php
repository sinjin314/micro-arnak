@extends('admin.template')

@section('title')
    Game list
@endsection

@section('content')

        @foreach ( $games as $game )
            <tr>
                <!-- Second card (parent container's width changed using utility classes) -->
                <div class=" w-400  mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
                    <div class="card">
                        <img src="{{ asset( 'storage/'.$game->image  )  }}">
                        <h2 class="card-title">
                            {{ $game->name }}
                        </h2>
                        <p>{{ $game->price }}€</p>
                        <h6>{{ $game->studio }}</h6>
                        <h6>{{ $game->pegi }}</h6>
                        <p class="text-muted">
                            {{ $game->desc }}
                        </p>
                        <td><a class="btn btn-primary" type="button" href="{{ route('games.show') }}" > show </a></td>
                        <td><a class="btn btn-secondary" type="button" href="{{ route('admin.game.edit'), $game->id }}" > edit </a></td>

                        @csrf
                        @method('DELETE')
                        <td><button class="btn btn-danger"> delete </button></td>
                    </div>
                </div>
            </tr>
        @endforeach
    </tbody>

@endsection
