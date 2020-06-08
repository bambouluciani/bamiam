@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Liste des catégories</h1>
    </div>
</div>

<form method="post" action="{{ Route('category_update', $category) }}">
    @csrf {{-- Pour éviter l'erreur 419--}}
    @method('put')
    <label for="nom">Nom : </label>
<input type="text" name="name" class="form-control" value="{{ $category->name }}">
    <br>
    <div class="form-group text-center">
        <input type="submit" class="btn btn-success">
    </div>
</form>
@endsection