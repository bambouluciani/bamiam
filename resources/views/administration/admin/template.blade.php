@extends('layouts.app')

@section('style')
    <style>
        .group-list{
            font-family: comic sans-serif;
            font-size: 26px;
        }
    </style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group text-center">
                    <li class="list-group-item"><a href="">Accueil</a></li>
                    <br>
                    <li class="list-group-item"><a href="">Gérer les rôles</a></li>
                    <br>
                    <li class="list-group-item"><a href="">Liste des réservation</a></li>
                    <br>
                    <li class="list-group-item"><a href="">Liste des contacts</a></li>
                </ul>
            </div>

            <div class="col-md-8">
                @yield('mycontent')
            </div>
        </div>
        
    </div>
@endsection