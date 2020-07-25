@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Plats du jour</h1>
    </div>
</div>

<form action="{{Route('special_store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" class="form-control" placeholder="Entrez le nom du plat" value={{old('name')}}>
        {!! $errors->first("name", ":message") !!}
        <br>
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" placeholder="Placer une image" value={{old('image')}} accept="image/x-png,image/gif,image/jpeg">
        {!! $errors->first("image", ":message") !!}
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" placeholder="Entrez la description du plat" value={{old('description')}}>
        {!! $errors->first("description", ":message") !!}
        <br>
        <label for="price">Prix</label>
        <input type="number" name="price" class="form-control" placeholder="Entrez le prix du plat" value={{old('price')}}>
        {!! $errors->first("price", ":message") !!}
        <br>
        <label for="genre">Genre</label>
        <input type="text" name="genre" class="form-control" placeholder="Entrez le genre du plat" value={{old('genre')}}>
        {!! $errors->first("genre", ":message") !!}
        <br>
    <div class="form-group text-center">
        <input type="submit" class="btn btn-success">
    </div>
</form>
@endsection