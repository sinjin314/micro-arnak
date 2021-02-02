@extends('admin.template')

@section('title')
    Edit User
@endsection

@section('content')

    <div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Editer un utilisateur</h2>
            </div>
        </div>
        <br>

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

    <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="{{ $user->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ $user->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

