@extends('template')
@section('contenu')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre :  {{ $film->titre }} </p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année de sortie : {{ $film->annee }}</p>
                <hr>
                <p>{{ $film->description }}</p>
                <hr>
                <p>{{ $film->image }}</p>
            </div>
        </div>
    </div>
@endsection
