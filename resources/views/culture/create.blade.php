@extends('base')

@section('title', 'create culture')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-3 py-3">
            <form action="{{ route('cultures.store') }}" method="post" enctype="multipart/form-data"  >
                @csrf
                <div class="input-group mb-3">
                    <button class="input-group-text">Titre</button>
                    <input class="form-control" type="text" name="title" id="">
                </div>
                @error('title')
                    {{ $message }}
                @enderror
                <div class="mb-3" >
                    <textarea placeholder="Entrer le description du culture" class="form-control" name="description" id="" cols="40" rows="10"></textarea>
                </div>
                @error('description')
                    {{ $message }}
                @enderror
                <div class="mb-3" >
                    <input name="image" class="form-control"  type="file">
                </div>
                <div>
                    <input class="form-control btn btn-success" type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
@endsection


