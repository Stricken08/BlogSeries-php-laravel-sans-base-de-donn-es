@extends('layouts.layout')
@section('title','page d affichage')
<div class="body">




    @section('content')
    <h1>Liste des Series</h1>
    <div class="series">

        @foreach($series as $nom => $series)
        <h2>{{ $series['nom'] }}</h2>
        <div class="flex">

            <div class="text">
                <ul>
                    <li>Pays d origine: {{ $series['pays'] }}</li>
                    <br>
                    <li>Années de diffusion : {{ $series['annes'] }}</li>
                    <br>
                    <li>Genre: {{ $series['genre'] }}</li>
                    <br>
                    <li>Synopsis: {{ $series['synopsis'] }}</li>
                </ul>
            </div>
            <div class="movie-card">

                @if(file_exists(public_path('images/' . strtolower($series['nom']) . '.png')))
                <img src="{{ asset('images/' . strtolower($series['nom']) . '.png') }}" alt="{{ $nom }}" />
                @elseif(file_exists(public_path('images/' . strtolower($series['nom']) . '.jpg')))
                <img src="{{ asset('images/' . strtolower($series['nom']) . '.jpg') }}" alt="{{ $nom }}" />
                @elseif(file_exists(public_path('images/' . strtolower($series['nom']) . '.jpeg')))
                <img src="{{ asset('images/' . strtolower($series['nom']) . '.jpeg') }}" alt="{{ $nom }}" />
                @else
                <p>Aucune image n'a été trouvée.</p>
                @endif

                <p>© Touts droits reservés</p>
                <form method="GET" action="{{ route('blog.show', ['blog' => $series['nom']]) }}">
                    <button type="submit">Voir détails</button>
                </form>
            </div>

        </div>
        
        @endforeach
    </div>

</div>

@endsection