@extends('base')

@include('layout.header')

@section('content')
    <div class="row text-light">
        <div class="col-md-3 col-12">
            @include('layout.sidebar')
        </div>
        <div class="col-12 col-md-9">
            <div class="p-3 mb-5">
                <div class="row">
                    <div class="col-md-6 p-3 g-3  bg-primary">
                        <p>Total des Utilisateurs</p>
                        <h1>{{ $users->count() }}</h1>
                    </div>
                    <div class="col-md-6 p-3 g-3 border">
                        <p>Total des Commentaires</p>
                        <h1>{{ $users->sum(function($user) { return $user->comments->count(); }) }}</h1>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title fw-bold">Liste des Utilisateurs</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        @if ($user->role !== 'admin')
                                            <form action="{{ route('users.destroy',$user)}}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">Supprimer</button>
                                            </form>
                                        @else
                                            <button class="btn btn-sm btn-secondary" disabled>Supprimer</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
