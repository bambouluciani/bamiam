@extends('administration.manager.template')

@section('mycontent')
    <h1 class="text-center text-danger mb-5">Bienvenue {{ Auth::user()->name }}</h1>

    @if (session('message'))
        <div class="alert alert-danger text-center" role="alert">
            {!! session('message') !!}
        </div>
        
    @endif
    
    
@endsection