@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Nouvelle catégorie</h1>
    </div>
</div>

<form action="{{Route('category_store')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Entrez le nom de la catégorie" value={{old('name')}}>
    </div>
    {!! $errors->first("name", ":message") !!}
    <div class="form-group text-center">
        <input type="submit" class="btn btn-success">
    </div>
</form>
@endsection