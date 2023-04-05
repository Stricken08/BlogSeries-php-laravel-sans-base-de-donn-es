@extends('layouts.layout')

@section('title', "Votre serie en detail")
<div class="tittleS">
    @section('content')
    <h1>{{ $serie['nom'] }}</h1>
</div>
<div class="textS">
    <ul>
        <li>Pays d'origine : {{ $serie['pays'] }}</li>
        <br>
        <li>Années de diffusion : {{ $serie['Annes'] }}</li>
        <br>
        <li>Genre : {{ $serie['genre'] }}</li>
        <br>
        <li>Synopsis : {{ $serie['synopsis'] }}</li>
    </ul>
    <img src="{{ asset('images/' . strtolower($serie['nom']) . '.jpeg') }}" alt="{{ $serie['nom'] }}" />
    <img src="{{ asset('images/' . strtolower($serie['nom']) . '.png') }}" alt="{{ $serie['nom'] }}" />
</div>
<a href="{{ route('blog.index') }}">Retour à la liste des séries</a>
@endsection