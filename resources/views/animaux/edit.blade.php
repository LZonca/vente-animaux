@extends('layout')
@section('title', 'MAJ de l\'animal n° {{$id }}')
<h1>Mettre à jour l'animal {{ $id }}</h1>
<form method="post" action="editer">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom"><br>
    <label for="type">Type:</label>
    <input type="text" name="type"><br>
    <label for="prix">Prix:</label>
    <input type="text" name="prix"><br>
    <label for="prix">Date de naissance:</label>
    <input type="date" name="date_naissance">
    <button name="btnCreate">Mettre a jour</button>
</form>
