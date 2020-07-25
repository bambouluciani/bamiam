@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Plats du jour</h1>
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


@if ($specials->count() > 0)
<table id="myTable" class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Image</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Genre</th>
            <th>Paramètres</th>
        </tr>
    </thead>

    <tbody>
        @foreach($specials as $special)
            <tr>
                <td>{{ $special->name }}</td>
                <td><img src="{{ $special->image }}" alt="{{ $special->name }}" height="80" width="90" /> </td>
                <td>{{$special->description}}</td>
                <td>{{$special->price}}</td>
                <td>{{$special->genre}}</td>
                <td class="d-flex justify-content-center">
                <a href="{{Route('special_edit', $special)}}" class="btn btn-secondary mr-3">Modifier</a>
                <form method="post" action="{{Route('special_delete', $special)}}">
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
    <h3 class="text-center">Aucun plat du jour</h3>
@endif



@endsection

