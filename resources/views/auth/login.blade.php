@extends('base')

@section('title', 'login')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <input type="email" name="email" placeholder="email" id="">
        </div>
        <div>
            <input type="password" name="password" id="">
        </div>
        <div>
            <input type="submit" value="Soumettre">
        </div>
    </form>
@endsection
