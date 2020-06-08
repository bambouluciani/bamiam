@extends('administration.manager.template')

@section('style_enfant')
    <style>
        table thead th{
            background-color: darkblue;
            color:white;
            text-align: center;
        }
    </style>
@endsection

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Liste des catégories</h1>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('success') }}
    </div>
    @php
        header("Refresh: 5");
    @endphp
   
@endif

@if ($categories_dans_la_vue->count() > 0 )
<table class="table table-bordered table-hover table-striped"> 
    <thead>
        <tr>
            <th>Nom</th>
            <th>Paramètres</th>
        </tr>
    </thead>

    <tbody>
        
            @foreach($categories_dans_la_vue as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>
                <a href="{{Route('category_edit', $category)}}" class="btn btn-secondary">Modifier</a>
                <form method="post" action="{{Route('category_delete', $category)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûre de vouloir supprimer cette catégorie ?')">Supprimer</button>
                </form>
                </td>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
            
        @else
            <h3 class="text-center">Aucune categorie</h3>
        @endif
        
  


@endsection