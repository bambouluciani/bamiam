@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Contact</h1>
    </div>
</div>


<div class="card">
    <header class="card-header">
        <p class="card-header-nom">Nom : {{ $contact->nom }}</p>
    </header>
    <div class="content">
        <p>Email: {{ $contact->email }}</p>
        <hr>
        <p>Message: {{ $contact->message }}</p>
        <hr>
            <form method="post" action="{{Route('contact_delete', $contact)}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm('Êtes-vous sûre de vouloir supprimer ce plat ?')">Supprimer</button>
            </form>
    </div>
</div>
@endsection