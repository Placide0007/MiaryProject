@extends('base')

@section('title', 'create post')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 py-3 border vh-100 px-3 bg-white">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <textarea placeholder="Momba an'ilay lahatsoratra" class="form-control @error('content') is-invalid @enderror"
                        name="content"  id="" cols="40" rows="10">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Sary</label>
                    <input name="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror " type="file">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <input class="form-control btn btn-success" type="submit" value="Handefa">
                </div>
            </form>
        </div>
    </div>
@endsection
