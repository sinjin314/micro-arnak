@extends('admin.template')

@section('title')
    list games
@endsection

@section('content')

        <div class="container-fluid">
          <div class="row m-10">
            <div class="col-sm"><b>Game</b></div>
            <div class="col-sm"><b>Price</b></div>
            <div class="col-sm"><b>Action</b></div>
          </div>

          @foreach ( $games as $game )
                  <div class="row m-10">
                    <div class="col-sm">{{ $game->name }}</div>
                    <div class="col-sm">{{ $game->price }}</div>
                    <div class="col-sm">
                            <form action="{{ route('admin.game.show')}}" method="get">
                                   <input type="hidden"  name="id" value="{{$game->id}}"> </input>
                                   <td><button class="btn btn-primary"> show </button></td>
                            </form>

                            <form action="{{ route('admin.game.edit')}}" method="get">
                                   <input type="hidden" name="id" value="{{$game->id}}"> </input>
                                   <td><button class="btn btn-secondary"> edit </button></td>
                            </form>

                            <form action="{{ route('game.destroy', $game)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td><button class="btn btn-danger"> delete </button></td>
                            </form>
                    </div>
                  </div>

          @endforeach
        </div>


@endsection
