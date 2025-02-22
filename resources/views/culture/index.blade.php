@extends('base')

@section('title', 'register')

@section('content')
    <div class="row">
        @foreach ($cultures as $culture)
            <div class="col-md-3 mb-3">
                <div class="card" style="width:100%;">
                    @if (isset($culture->image))
                        <img src="{{ asset('storage/' . $culture->image) }}" alt="" class="img-fluid" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <p class="card-text lead fw-bold text-primary">{{ $culture->title }}</p>
                        <button class="btn btn-light mb-2 btn-sm">{{ date('Y-m-d', strtotime($culture->created_at)) }}</button>
                        <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;" class="card-text">{{ $culture->description }}</p>
                        <button class="btn btn-success">Voir plus</button>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla totam asperiores aliquam illum facere. Officiis ipsam perferendis quasi nesciunt repudiandae. --}}
    </div>
@endsection

