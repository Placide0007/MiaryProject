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
            <!-- Vous pouvez ajouter du contenu ici si nécessaire -->
        </div>

        <div class="col-md-6 mb-3">
            @foreach ($posts as $post)
            <a class="text-decoration-none" href="{{ route('posts.show',$post) }}">
                <div class="card p-3 mb-3" style="width:100%;">
                    <p class="lead fw-bold">{{ ucfirst($post->user->name) }}</p>
                    <p class="figure-caption">{{ date('Y-m-d', strtotime($post->created_at)) }}</p>
                    <p class="card-text"  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
                        {{ $post->content }}
                    </p>
                    @if (isset($post->image))
                        <img src="{{ asset('storage/' . $post->image) }}" alt=""
                             class="img-fluid" style="height: 400px; object-fit: cover;">
                    @endif
                    <div class="mt-3 py-2">
                        <i class="bi bi-chat-square"></i>
                        {{ $post->comments->count() }}
                    </div>
                </div>
            </a>
            @endforeach
            <!-- Pagination si nécessaire -->
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

