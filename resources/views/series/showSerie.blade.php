@extends('layouts.layout')
@section('title', 'details de la serie')
@section('content')
<div id="stats">
    <strong>Nom:</strong> {{$nom}}<br /><br>
    <strong>pays:</strong> {{$pays}}<br /><br>
    <strong>années:</strong> {{$annees}}<br /><br>
    <strong>genre:</strong> {{$genre}}<br /><br>
    <strong>synopsis:</strong> {{$synopsis}}<br />

    <br /><br />

</div>
@endsection