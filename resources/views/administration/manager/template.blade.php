@extends('layouts.app')

@section('style') 
    <style>
        .list-group{
            font-family: comic sans-serif;
            font-size: 23px;
        }
    </style>
@endsection



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group text-center">
                <li class="list-group-item"><a href="{{Route('manager_index')}}">Accueil</a></li>
                    <br>
                    <li class="list-group-item"><a href="{{Route('category_create')}}">Nouvelle catégorie</a></li>
                    <li class="list-group-item"><a href="{{Route('category_index')}}">Liste des catégories</a></li>
                    <br>
                    <li class="list-group-item"><a href="{{Route('dish_create')}}">Nouveau plat</a></li>
                    <li class="list-group-item"><a href="{{Route('dish_index')}}">Liste des plats</a></li>
                    <br>
                    <li class="list-group-item"><a href="">Plats du jour</a></li>
                    <br>
                <li class="list-group-item"><a href="{{Route('contact_index')}}">Liste des contacts</a></li>
                </ul>
            </div>

            <div class="col-md-8">
                @yield('mycontent')
            </div>
        </div>
        
    </div>
@endsection