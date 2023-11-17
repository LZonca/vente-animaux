
@extends('layout')
@section('title', 'THE ANIMAUL')
@section('main')
    <h1>THE ANIMAUL</h1>
    <img src="{{ $animal->img_link }}"/>
    <ul>
        <li>Numero: {{ $animal->id }}</li>
        <li>Type: {{ $animal->type }}</li>
        <li>Nom: {{ $animal->nom }}</li>
        <li>Prix: {{ $animal->prix }}</li>
        <li>Proprio: {{ $animal->owner->name }}</li>
    </ul>
    <a href='/animaux/{{ $animal['id'] }}/edit'><button>EDIT</button></a>
    <a href='/animaux/'><button>Retour</button></a>
    <form method="POST" action="/animaux/{{ $animal->id }}">
        @method('DELETE')
        <button name="btnDelete">DELETE</button>
    </form>
@endsection
