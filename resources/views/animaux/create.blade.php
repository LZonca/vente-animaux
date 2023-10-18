@extends('layout')
@section('title', 'CREER UN ANIMAL')
<h1>CREER UN ANIMAL</h1>
<form method="post" action="/animaux">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom"><br>
    <label for="type">Type:</label>
    <input type="text" name="type"><br>
    <label for="prix">Prix:</label>
    <input type="text" name="prix"><br>
    <label for="prix">Date de naissance:</label>
    <input type="date" name="date_naissance">
    <button name="btnCreate">Créer un animal</button>
</form>
