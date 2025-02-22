@extends('base')

@section('title', 'register')

@include('layout.header')

@section('content')
    <div class="row">
        @if ($cultures->isEmpty())
            <p class="text-center lead bg-light fw-bold border p-3">Aucun culture ajouter</p>
        @else
            @foreach ($cultures as $culture)
                <div class="col-md-3 mb-3">
                    <a class="text-decoration-none" href="{{ route('cultures.show', $culture) }}">
                        <div class="card" style="width:100%;">
                            @if (isset($culture->image))
                                <img src="{{ asset('storage/' . $culture->image) }}" alt=""
                                    class="img-fluid"style="height: 200px; object-fit: cover;">
                            @endif
                            <div class="card-body">
                                <p class="card-text lead fw-bold text-primary">{{ ucfirst($culture->title) }}</p>
                                <button
                                    class="btn btn-light mb-2 btn-sm">{{ date('Y-m-d', strtotime($culture->created_at)) }}</button>
                                <p
                                    style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;"class="card-text">
                                    {{ $culture->description }}</p>
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
