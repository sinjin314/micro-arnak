@extends('admin.template')

@section('title')
    list users
@endsection

@section('content')

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Game</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>


    <tbody>
        @foreach ( $games as $game )
            <tr>

                <td> {{ $game->name }} </td>
                <td> {{ $game->price }} </td>
                <td>
                    <form action="{{ route('game.destroy', $game)}}" method="POST">

                        <button class="btn btn-primary" type="button" href="{{ route('admin.game.show', $game->id) }}"> show </button>
                        <button class="btn btn-secondary" type="button" href="{{ route('admin.game.edit', $game->id) }}" > edit </button>

                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"> delete </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
