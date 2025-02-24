@extends('base')

@section('title', 'create culture')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3 py-3 border vh-100 px-3 bg-white">
            <form action="{{ route('cultures.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <button class="input-group-text btn-primary btn">Titre</button>
                    <input class="form-control @error('title') is-invalid @enderror "type="text" name="title" value="{{ old('title') }}" id="">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea placeholder="Entrer le description du culture" class="form-control @error('description') is-invalid @enderror"
                        name="description" id=""cols="40" rows="10">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input name="image" class="form-control @error('image') is-invalid @enderror " type="file" value="{{ old('image') }}" >
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="audio" class="form-label">Audio</label>
                    <input name="audio" class="form-control @error('audio') is-invalid @enderror " type="file" accept="audio/*" value="{{ old('audio') }}">
                    @error('audio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <input class="form-control btn btn-success" type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
@endsection
