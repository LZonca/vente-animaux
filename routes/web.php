<?php

use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/animaux', function (){
    $titre_page = 'TOUS LES ANIMAUX ILLEGAUX A VENDRE';
    $animaux = [
        ['id' => 0, 'type' => 'Chat demoniaque', 'nom' => 'maow', 'prix' => 2500],
        ['id' => 1, 'type' => 'Monstre', 'nom' => 'blob', 'prix' => 5000],
        ['id' => 2, 'type' => 'Cracoucas', 'nom' => 'kakaw', 'prix' => 3000],
        ['id' => 3, 'type' => 'Cochon', 'nom' => 'peppa', 'prix' => 2900],
    ];
    return view('animaux.index', compact('animaux'));
});
Route::get('/animaux/create', function () {
    $titre_page = "CREER UN ANIMAL ILLEGAL";
    return view("animaux.create");
});

Route::post('/animaux', function ($type, $nom, $prix) {

});

Route::get('/animaux/{id}', function ($id) {
    $titre_page = "UN ANIMAL ILLEGAL";
    $animaux = [
        ['id' => 0, 'type' => 'Chat demoniaque', 'nom' => 'maow', 'prix' => 2500],
        ['id' => 1, 'type' => 'Monstre', 'nom' => 'blob', 'prix' => 5000],
        ['id' => 2, 'type' => 'Cracoucas', 'nom' => 'kakaw', 'prix' => 3000],
        ['id' => 3, 'type' => 'Cochon', 'nom' => 'peppa', 'prix' => 2900],
    ];
        try{
            $animal = $animaux[$id];
        return view('animaux.show', compact('animal'));
        }catch (Exception $e) {
            return response('CET ANIMAL N\'EXISTE PAS', 404);
        }
});




Route::get('/', function () {
    return view('welcome');
});
