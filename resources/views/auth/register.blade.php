@extends('base')

@section('title', 'register')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="bg-white rounded p-4" action="{{ route('register') }}" style="width: 350px;" method="post">
            @csrf
            <h1 class="text-center fw-bold mb-4">Hisoratra anarana</h1>
            <div class="mb-3">
                <label for="" class="form-label">Anarana</label>
                <input class="form-control @error('name') is-invalid @enderror  " type="text" name="name"
                    id="">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mailaka</label>
                <input class="form-control @error('email') is-invalid @enderror" value="{{ old('name') }}" type="email" name="email" id="">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Teny miafina</label>
                <input class="form-control  @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('email') }}" id="">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control bg-success text-light" type="submit" value="Hisoratra">
            </div>
            <div>
                <label for="">Efa manana kaonty?</label>
                <a class="fw-bold" href="{{ route('login') }}">Hifandray</a>
            </div>
        </form>
    </div>
@endsection
