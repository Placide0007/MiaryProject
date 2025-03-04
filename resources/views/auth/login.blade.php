@extends('base')

@section('title', 'login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <form class="bg-white rounded p-4" action="{{ route('login') }}" style="width: 350px;" method="post">
        @csrf
        <h1 class="text-center fw-bold mb-4">Fifandraisana</h1>

        <div class="mb-3">
            <label for="" class="form-label">Mailaka</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="" value="{{ old('email') }}">
            @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Teny miafina</label>
            <input class="form-control @error('password') is-invalid @enderror"  type="password" name="password" id="">
            @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
            @enderror
        </div>
        <div class="mb-3" >
            <input class="form-control bg-success text-light" type="submit" value="Hifandray">
        </div>
        <div>
            <label for="">Tsy manana kaonty ?</label>
            <a class="fw-bold" href="{{ route('register') }}">Amorona Kaonty</a>
        </div>
    </form>
</div>
@endsection

