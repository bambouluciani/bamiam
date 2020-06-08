@extends('administration.manager.template')

@section('mycontent')
<div class="card mb-5">
    <div class="card-header">
        <h1 class="text-center text-danger">Liste des contacts</h1>
    </div>
</div>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>

    <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->nom}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->message}}</td>
                <td>
                    <a href="{{Route('contact_show', $contact)}}" class="btn btn-primary">Voir</a>
                <form method="post" action="{{Route('contact_delete', $contact)}}">
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


@endsection