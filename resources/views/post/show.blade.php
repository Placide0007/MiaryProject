@extends('base')

@section('title', 'show')

@section('content')
    <div class="row">
        <div class="col-md-3 m-4 m-md-1">

        </div>
        <div class="col-md-6 offset-md-3 py-3 border px-3 bg-white">
            <div class="card" style="width:100%;">
                @if (isset($post->image))
                    <img src="{{ asset('storage/' . $post->image) }}" alt=""
                        class="img-fluid"style="height: 500px; object-fit: cover;">
                @endif
                <div class="card-body">
                    <p class="card-text text-primary fw-bold lead">{{ ucfirst($post->user->name) }}</p>
                    <span
                        class="figure-caption bg-light border px-3 mb-3">{{ date('Y-m-d', strtotime($post->created_at)) }}</span>
                    <p class="card-text mt-3">
                        {{ $post->content }}
                    </p>
                </div>
            </div>
            <form class="mt-3" action="{{ route('comments.store') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <input name="comment" placeholder="Commenter" type="text" class="form-control bg-light">
                    <button class="input-group-text btn btn-primary">Handefa kaomantera</button>
                </div>
            </form>
            @foreach ($post->comments as $comment)
                <div class="mb-3 border border px-3 mt-3 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-dark px-3">{{ ucfirst($comment->user->name) }}</button>
                        @if (auth()->user()->id === $comment->user->id || auth()->user()->isAdmin())
                            <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary btn-sm">Hamafa</button>
                            </form>
                        @endif
                    </div>
                    <p class="figurec-caption small">{{ \Carbon\Carbon::parse($comment->created_at)->format('Y-m-d H:i') }}</p>
                    <p class="">{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>
        <div class="col-md-3 right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}">Hiverina amin'ny Pejy fandraisana</a>
        </div>
    </div>
@endsection
