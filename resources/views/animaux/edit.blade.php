@extends('layout')

@section('title', 'MAJ de l\'animal n°' . $animal->id)

@section('main')
    <h1>
        Mettre à jour l'animal {{ $animal->id }}</h1>
    <form method="post" action="/animaux/{{ $animal->id }}">
        @csrf
        @method('PATCH')
        <label for="nom">Nom:</label>
        <input type="text" name="nom" value="{{ $animal->nom }}"><br>
        @error('nom')
            <p style='color:red;'>{{ $message }}</p>
        @enderror
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $animal->type }}"><br>
        @error('type')
            <p style='color:red;'>{{ $message }}</p>
        @enderror
        <br>
        <label for="prix">Prix:</label>
        <label for="prix">Prix:</label>
        <input type="text" name="prix" value="{{ $animal->prix }}"><br>
        @error('prix')
            <p style='color:red;'>{{ $message }}</p>
        @enderror
        <br>
        <label for="prix">Date de naissance:</label>
        <input type="date" name="date_naissance" value="{{ $animal->date_naissance }}">
        @error('date_naissance')
            <p style='color:red;'>{{ $message }}</p>
        @enderror
        <br>
        <button name="btnCreate">Mettre a jour</button>
    </form>
@endsection
