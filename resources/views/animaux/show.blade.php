@extends('layout')
@section('title', 'THE ANIMAUL')
<body>
    <h1>THE ANIMAUL</h1>
    <ul>
        <li>Numero: {{$animal['id'] }}</li>
        <li>Type: {{$animal['type']}}</li>
        <li>Nom: {{$animal['nom']}}</li>
        <li>Prix: {{$animal['prix']}}</li>
    </ul>
</body>
</html>
