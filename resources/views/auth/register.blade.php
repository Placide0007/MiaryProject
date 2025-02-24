@extends('base')

@section('title', 'register')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="bg-white rounded p-4" action="{{ route('register') }}" style="width: 350px;" method="post">
            @csrf
            <h1 class="text-center fw-bold mb-4">Inscription</h1>
            <div class="mb-3">
                <label for="" class="form-label">Nom</label>
                <input class="form-control @error('name') is-invalid @enderror  " type="text" name="name"
                    id="">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" value="{{ old('name') }}" type="email" name="email" id="">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">mot de passe</label>
                <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('email') }}" id="">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control bg-success text-light" type="submit" value="Soumettre">
            </div>
            <div>
                <label for="">A déjà un compte?</label>
                <a class="fw-bold" href="{{ route('login') }}">Connexion</a>
            </div>
        </form>
    </div>
@endsection
