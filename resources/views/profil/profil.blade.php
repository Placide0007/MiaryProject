@extends('base')

@section('title', 'profile')

@include('layout.header')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="bg-white rounded p-4"  action="" style="width: 350px;" method="post">
            @csrf
            <h1 class="text-center  fw-bold mb-4">Mombamomba Ahy</h1>
            <div class="mb-3">
                <label for="" class="form-label">Anarana</label>
                <input class="form-control" value="{{ ucfirst(auth()->user()->name ) }}" disabled type="text" name="name"id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mailaka</label>
                <input class="form-control" disabled  value="{{ auth()->user()->email  }}" type="email" name="email" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Andraikitra</label>
                <input class="form-control" disabled  type="text" name="role" value="{{ auth()->user()->role }}" id="">
            </div>
        </form>
    </div>

@endsection