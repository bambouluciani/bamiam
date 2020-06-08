@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Liste des plats</h1>
    </div>
</div>

<form method="post" action="{{ Route('dish_update', $dish) }}">
    @csrf {{-- Pour éviter l'erreur 419--}}
    @method('put')
    <label for="category_id">Catégorie : </label>
    <select id="category_id" name="category_id" class="form-control" >
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        
    </select>
    <br>
    <label for="nom">Nom : </label>
    <input type="text" name="name" class="form-control" id="name" value="{{ $dish->name }}">
    <br>
    <label for="description">Description : </label>
    <input type="text" name="description" class="form-control" id="description" value="{{ $dish->description }}">
    <br>
    <label for="price">Prix : </label>
    <input type="number" name="price" class="form-control" id="price" value="{{ $dish->price }}">
    <br>
    <label for="genre">Genre : </label>
    <input type="text" name="genre" class="form-control" id="genre" value="{{ $dish->genre }}">
    <br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection