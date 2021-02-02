@extends('admin.template')

@section('title')
    User list
@endsection

@section('content')


    <tbody>
    @foreach ( $users as $user )
        <tr>
            <!-- Second card (parent container's width changed using utility classes) -->
            <div class=" w-400  mw-full"> <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
                <div class="card">
                    <h2 class="card-title">
                        Name: {{ $user->name }}
                    </h2>
                    <p> Email: {{ $user->email }}</p>
                    <h6>Admin: {{ $user->is_admin }}</h6>
                    <h6>Email verification: {{ $user->email_verified_at }}</h6>
                    <h6>Account created at: {{ $user->created_at }}</h6>
                    <h6>Last account update: {{ $user->updated_at }}</h6>


                    @csrf
                    @method('DELETE')
                    <td><button class="btn btn-danger">Delete </button></td>
                    <td><a class="btn btn-secondary" type="button" href="{{ route('admin.user.edit'), $user->id }}" > edit </a></td>
                </div>
            </div>
        </tr>
    @endforeach
    </tbody>

@endsection
