@extends('base')

@section('title', 'register')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="name" id="">
        </div>
        <div>
            <input type="email" name="email" placeholder="email" id="">
        </div>
        <div>
            <input type="password" name="password" id="">
        </div>
        <div>
            <input type="password" name="password_confirmation" id="">
        </div>
        <div>
            <input type="submit" value="Soumettre">
        </div>
    </form>
@endsection
