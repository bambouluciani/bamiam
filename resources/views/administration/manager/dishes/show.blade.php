@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Plat</h1>
    </div>
</div>


<div class="card">
    <header class="card-header">
        <p class="card-header-nom">Nom : {{ $dish->name }}</p>
    </header>
    <div class="content">
        <p>Catégorie : {{ $category }}</p>    
        <hr>
        <p>Description: {{ $dish->description }}</p>
        <hr>
        <p>Prix : {{ $dish->price }}€</p>
        <hr>
        <p>Genre : {{ $dish->genre }}</p>
        <hr>
        <a href="{{Route('dish_edit', $dish)}}" class="btn btn-secondary">Modifier</a>
                <form method="post" action="{{Route('dish_delete', $dish)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûre de vouloir supprimer ce plat ?')">Supprimer</button>
                </form>
    </div>
</div>


@endsection