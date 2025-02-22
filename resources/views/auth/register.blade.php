@extends('base')

@section('title', 'register')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="bg-white rounded p-4" action="{{ route('register') }}" style="width: 350px;" method="post">
            @csrf
            <h1 class="text-center fw-bold mb-4">Inscription</h1>
            <div class="mb-3">
                <label for="" class="form-label">Nom</label>
                <input class="form-control " type="text" name="name"  id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" type="email" name="email" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">mot de passe</label>
                <input class="form-control"  type="password" name="password" id="">
            </div>
            <div class="mb-3" >
                <input class="form-control btn btn-success" type="submit" value="Soumettre">
            </div>
            <div>
                <label for="">A déjà un compte?</label>
                <a class="fw-bold" href="">Connexion</a>
            </div>
        </form>
    </div>
@endsection
