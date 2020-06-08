@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Liste des plats</h1>
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


<div class="mb-5 form-group">
    <form method="post" action="{{ Route('dish_index') }}">
        @csrf
        <select class="form-control" name="category_id" onchange="this.form.submit()">
        <option value="">Filtrer par categories</option>
        @foreach ($categories as $category)
            <option value={{ $category->id }}> {{ $category->name }} </option>
        @endforeach
        </select>
    </form>
</div>



@if ($dishes->count() > 0)
<table id="myTable" class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Catégorie</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Genre</th>
            <th>Paramètres</th>
        </tr>
    </thead>

    <tbody>
        @foreach($dishes as $dish)
            <tr>
                <td>{{$dish ->category->name}}</td>
                <td>{{$dish->name}}</td>
                <td>{{$dish->description}}</td>
                <td>{{$dish->price}}</td>
                <td>{{$dish->genre}}</td>
                <td>
                    <a href="{{Route('dish_show', $dish)}}" class="btn btn-primary">Voir</a>
                <a href="{{Route('dish_edit', $dish)}}" class="btn btn-secondary">Modifier</a>
                <form method="post" action="{{Route('dish_delete', $dish)}}">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûre de vouloir supprimer ce plat ?')">Supprimer</button>
                </form>
                </td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
    <h3 class="text-center">Aucun plat</h3>
@endif



@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
