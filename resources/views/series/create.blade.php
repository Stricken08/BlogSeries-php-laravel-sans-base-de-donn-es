@extends('layouts.layout')
@section('title', 'Ajouter une série')
@section('content')
<div class="body form">
    <h1>Ajouter une série</h1>
    <form method="POST" action="/blog">
        @csrf
        <div class="form-group">
            <label for="nom">Nom de la série :</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pays">Pays d'origine :</label>
            <input type="text" name="pays" id="pays" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="annees">Années de diffusion :</label>
            <input type="text" name="annees" id="annees" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre :</label>
            <input type="text" name="genre" id="genre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="synopsis">Synopsis :</label>
            <textarea name="synopsis" id="synopsis" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" name="image" id="image" class="form-control-file" accept=".png, .jpg, .jpeg">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif
@endsection