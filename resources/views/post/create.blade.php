@extends('base')

@section('title', 'create post')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3 py-3 border vh-100 px-3 bg-white">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <textarea placeholder="Entrer le description du culture" class="form-control" name="content" id="" cols="40"
                        rows="10"></textarea>
                    @error('content')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input name="image" class="form-control" type="file">
                    @error('image')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <input class="form-control btn btn-success" type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
@endsection
