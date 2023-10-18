<?php

use App\Models\Animal;
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
    $animaux = Animal::all();
    return view('animaux.index', compact('animaux'));
});
Route::get('/animaux/create', function () {
    $titre_page = "CREER UN ANIMAL ILLEGAL";
    return view("animaux.create");
});

Route::post('/animaux', function () {
    $a = new Animal();
    $a->nom = request()->nom;
    $a->type = request()->type;
    $a->prix = request()->prix;
    $a->date_naissance = request()->date_naissance;
    $a->save();
    return redirect('/animaux/'. $a->id);
});

Route::get('/animaux/{id}', function ($id) {
    $titre_page = "UN ANIMAL ILLEGAL";
    //$animaux = Animal::all();
        /*try{
            $animal = Animal::find($id);
        return view('animaux.show', compact('animal'));
        }catch (Exception $e) {
            return response('CET ANIMAL N\'EXISTE PAS', 404);
        }*/
        $animal = Animal::findOrFail($id);
        return view('animaux.show', compact('animal'));
});




Route::get('/', function () {
    return view('welcome');
});
