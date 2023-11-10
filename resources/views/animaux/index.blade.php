@extends('layout')
@section('title', 'TOUS LES ANIMAUX')
<h1>TOUS LES ANIMAUX <a href="/animaux/create"> Créer</a></h1>
<table>
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Controles</th>
    </tr>
    @foreach ($animaux as $animal)
        <tr>
            <td><a href="/animaux/{{$animal['id']}}">{{$animal['id']}}</a></td>
            <td>{{$animal->type}}</td>
            <td>{{$animal->nom}}</td>
            <td>{{$animal->prix}}</td>
            <td><a></a></td>
        </tr>
    @endforeach
</table>
