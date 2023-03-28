@extends('layouts.layout')
@section('title','page d affichage')
<div class="body">




    @section('content')
    <h1>Liste des Series</h1>
    <div class="series">

        @foreach($series as $nom => $series)
        <h2>{{ $nom }}</h2>
        <div class="flex">

            <div class="text">
                <ul>
                    <li>Pays d origine: {{ $series['pays d origine'] }}</li>
                    <br>
                    <li>Années de diffusion : {{ $series['Années de diffusion :'] }}</li>
                    <br>
                    <li>Genre: {{ $series['Genre'] }}</li>
                    <br>
                    <li>Synopsis: {{ $series['Synopsis'] }}</li>
                </ul>
            </div>
            <div class="movie-card">
                <h2>test</h2>
                @if(file_exists(public_path('images/' . strtolower($nom) . '.png')))
                <img src="{{ asset('images/' . strtolower($nom) . '.png') }}" alt="{{ $nom }}" />
                @elseif(file_exists(public_path('images/' . strtolower($nom) . '.jpg')))
                <img src="{{ asset('images/' . strtolower($nom) . '.jpg') }}" alt="{{ $nom }}" />
                @elseif(file_exists(public_path('images/' . strtolower($nom) . '.jpeg')))
                <img src="{{ asset('images/' . strtolower($nom) . '.jpeg') }}" alt="{{ $nom }}" />
                @else
                <p>Aucune image n'a été trouvée.</p>
                @endif

                <p>paragraphe</p>
                <form method="GET" action="{{ route('blog.show', ['blog' => $nom]) }}">
                    <button type="submit">Voir détails</button>
                </form>
            </div>
            <form method="POST" action="{{ route('blog.destroy', ['blog' => $nom]) }}">
                @csrf
                @method('DELETE')
                <button type="submit">❌</button>
            </form>
        </div>
        @endforeach
    </div>

</div>

@endsection