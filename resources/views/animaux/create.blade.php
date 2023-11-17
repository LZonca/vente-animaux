@extends('layout')
@section('title', 'CREER UN ANIMAL')
<h1>
    CREER UN ANIMAL</h1>

{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p> {{ $error }} </p>
    @endforeach
@endif --}}

<form method="post" action="/animaux">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="{{ old('nom') }}"><br>
    @error('nom')
        <p style='color:red;'>{{ $message }}</p>
    @enderror
    <br>
    <label for="type">Type:</label>
    <input type="text" name="type" value="{{ old('type') }}"><br>
    @error('type')
        <p style='color:red;'>{{ $message }}</p>
    @enderror
    <br>
    <label for="prix">Prix:</label>

    <input type="text" name="prix" value="{{ old('prix') }}"><br>
    @error('prix')
        <p style='color:red;'>{{ $message }}</p>
    @enderror
    <br>
    <label for="date_naissance">Date de naissance:</label>
    <input type="date" name="date_naissance" value="{{ old('date_naissance') }}"><br>
    @error('date_naissance')
        <p style='color:red;'>{{ $message }}</p>
    @enderror
    <br>
    <label for="img_link">Image:</label>
    <input type="image" name="img_link" value="{{ old('date_naissance') }}"><br>
    @error('date_naissance')
        <p style='color:red;'>{{ $message }}</p>
    @enderror
    <button name="btnCreate">Créer un animal</button>
</form>
<a href='/animaux/'><button class="btn btn-blue">Retour</button></a>
