@extends('base')

@section('title', 'index')

@section('content')
  <p>home page</p>
  <form action="{{ route('logout') }}" method="post" >
    @csrf
    <button>Deconnexion</button>
  </form>
@endsection
