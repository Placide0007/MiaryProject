@extends('base')

@section('title', 'register')

@include('layout.header')

@section('content')
    <div class="row">
        @if ($posts->isEmpty())
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="text-center lead text-light p-3">Aucun post ajouté</p>
            </div>
            <div class="col-md-3 right">
                <a class="btn btn-primary" href="{{ route('posts.create') }}">Publier un article</a>
            </div>
        @else
            <div class="col-md-3">

            </div>

            <div class="col-md-6 mb-3">
                @foreach ($posts as $post)
                    <a class="text-decoration-none" href="{{ route('posts.show', $post) }}">
                        <div class="card p-3 mb-3" style="width:100%;">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="lead fw-bold">{{ ucfirst($post->user->name) }}</p>
                                @if (auth()->user()->id === $post->user->id || auth()->user()->isAdmin())
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-secondary btn-sm">Supprimer</button>
                                    </form>
                                @endif
                            </div>
                            <p class="figure-caption">{{ date('Y-m-d', strtotime($post->created_at)) }}</p>
                            <p class="card-text"
                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
                                {{ $post->content }}
                            </p>
                            @if (isset($post->image))
                                <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid"
                                    style="height: 400px; object-fit: cover;">
                            @endif
                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-chat-square"></i>
                                    {{ $post->comments->count() }} commentaire{{ $post->comments->count() > 1 ? 's' : '' }}
                                </div>
                                <form action="{{ route('posts.toggleLike', $post) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i
                                            class="bi {{ auth()->user()->hasLiked($post) ? 'bi-hand-thumbs-up-fill' : 'bi-hand-thumbs-up' }}"></i>
                                        {{ $post->reactions->where('liked', true)->count() }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </a>
                @endforeach

                <div class="text-center">
                    {{ $posts->links('pagination::bootstrap-5') }}
                </div>
            </div>

            <div class="col-md-3 right">
                <a class="btn btn-primary" href="{{ route('posts.create') }}">Publier un article</a>
            </div>
        @endif
    </div>
@endsection
