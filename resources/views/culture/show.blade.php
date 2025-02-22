@extends('base')

@section('title', 'show')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3 border px-3 bg-white">
            <div class="card" style="width:100%;">
                @if (isset($culture->image))
                    <img src="{{ asset('storage/' . $culture->image) }}" alt=""
                        class="img-fluid"style="height: 500px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <p class="card-text lead fw-bold text-primary">{{ ucfirst($culture->title) }}</p>
                    <button class="btn btn-light mb-2 btn-sm">{{ date('Y-m-d', strtotime($culture->created_at)) }}</button>
                    @if ($culture->audio)
                        <audio controls class="w-100" >
                            <source src="{{ asset('storage/' . $culture->audio) }}" type="audio/mpeg">
                        </audio>
                    @endif
                    <p class="card-text">
                        {{ $culture->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
