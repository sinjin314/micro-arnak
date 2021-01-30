@extends('admin.template')

@section('title')
    list games
@endsection

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th>Game</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

    <tbody>
        @foreach ( $games as $game )
            <tr>
                <td> {{ $game->name }} </td>
                <td> {{ $game->price }} </td>
                <td>
                    <form action="#" method="POST">

                        <td><button class="btn btn-primary" type="button" > show </button></td>
                        <td><button class="btn btn-secondary" type="button" href="{{ route('admin.game.edit'), $game->id }}" > edit </button></td>

                        @csrf
                        @method('DELETE')
                        <td><button class="btn btn-danger"> delete </button></td>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

@endsection