@extends('layouts.layout')

@section('title', "Votre serie en detail")

@section('content')
<h1>{{ $nom }}</h1>
<div class="text">
    <ul>
        <li>Pays d'origine : {{ $details['pays d origine'] }}</li>
        <br>
        <li>Années de diffusion : {{ $details['Années de diffusion :'] }}</li>
        <br>
        <li>Genre : {{ $details['Genre'] }}</li>
        <br>
        <li>Synopsis : {{ $details['Synopsis'] }}</li>
    </ul>
    <img src="{{ asset('images/' . strtolower($nom) . '.jpeg') }}" alt="{{ $nom }}" />
    <img src="{{ asset('images/' . strtolower($nom) . '.png') }}" alt="{{ $nom }}" />
</div>
<a href="{{ route('blog.index') }}">Retour à la liste des séries</a>
@endsection