@extends('base')

@section('title', 'index')

@section('content')
  <p>home page</p>
  <form action="" method="POST" >
    @csrf
    <button>Deconnexion</button>
  </form>
@endsection
