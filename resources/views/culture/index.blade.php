@extends('base')

@section('title', 'register')

@include('layout.header')

@section('content')
    <div class="row">
        @if ($cultures->isEmpty())
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="text-center lead text-light p-3">Aucun culture ajouté</p>
            </div>
            @if (auth()->user()->isAdmin())
                <div class="col-md-3 right">
                    <a class="btn btn-primary" href="{{ route('cultures.create') }}">Nouveau culture</a>
                </div>
            @endif
        @else
            @if (auth()->user()->isAdmin())
                <div class="col-12 mb-5 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('cultures.create') }}">Nouveau culture</a>
                </div>
            @endif
            @foreach ($cultures as $culture)
                <div class="col-md-3 mb-3">
                    <a class="text-decoration-none" href="{{ route('cultures.show', $culture) }}">
                        <div class="card" style="width:100%;">
                            @if (isset($culture->image))
                                <img src="{{ asset('storage/' . $culture->image) }}" alt=""
                                    class="img-fluid"style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text lead fw-bold text-primary">{{ ucfirst($culture->title) }}</p>
                                </div>
                                <p
                                    style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"class="card-text">
                                    {{ $culture->description }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    @if (auth()->user()->isAdmin())
                                    <form action="{{ route('cultures.edit', $culture) }}" method="GET">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-success small">
                                            modifier
                                        </button>
                                    </form>
                                    <form action="{{ route('cultures.destroy', $culture) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger small">
                                            supprimer
                                        </button>
                                    </form>
                                    @endif
                                </div>
                                <p class="text-end figure-caption small  rounded px-2">
                                    {{ \Carbon\Carbon::parse($culture->created_at)->format('Y-m-d H:i') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div>
                {{ $cultures->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection


