@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Plats du jour</h1>
    </div>
</div>

<form method="post" action="{{ Route('special_update', $special)}}" enctype="multipart/form-data">
    @csrf {{-- Pour éviter l'erreur 419--}}
    @method('put')
    <label for="name">Nom : </label>
    <input type="text" name="name" class="form-control" id="name" value="{{ $special->name }}">
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control" placeholder="Placer une image" value={{old('image')}} accept="image/x-png,image/gif,image/jpeg">
    <br>
    <label for="description">Description : </label>
    <input type="text" name="description" class="form-control" id="description" value="{{ $special->description }}">
    <br>
    <label for="price">Prix : </label>
    <input type="number" name="price" class="form-control" id="price" value="{{ $special->price }}">
    <br>
    <label for="genre">Genre : </label>
    <input type="text" name="genre" class="form-control" id="genre" value="{{ $special->genre }}">
    <br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection