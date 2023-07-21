@extends('template')

@section('titre')
    Les articles
@endsection

@section('contenu')
    <p>c'est l'article numero {{ $numero }}</p>
@endsection