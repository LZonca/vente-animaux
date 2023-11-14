<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimauxController extends Controller
{
    //
    public function index(){
        $titre_page = 'TOUS LES ANIMAUX ILLEGAUX A VENDRE';
        $animaux = Animal::all();
        return view('animaux.index', compact('animaux'));
    }

    public function show(){
        $titre_page = 'UN ANIMAL ILLEGAL';
        return view('animaux.show', compact('animal'));
    }

    public function create(){
        $titre_page = 'CREER UN ANIMAL ILLEGAL';
        return view('animaux.create');
    }

    public function store(){
        request()->validate([
            'nom' => ['required', 'string', 'min:2'],
            'type' => ['required', 'string', 'min:2'],
            'prix' => ['required', 'numeric', 'min:0'],
            'date_naissance' => ['required', 'date', 'before:' . date('Y-m-d')],
        ]);
        $a = new Animal();
        $a->nom = request()->nom;
        $a->type = request()->type;
        $a->prix = request()->prix;
        $a->date_naissance = request()->date_naissance;
        $a->save();
        return redirect('/animaux/' . $a->id);
    }

    public function edit(Animal $id){
        $animal = Animal::findOrFail($id);
        return view('animaux.edit', compact('animal'));
    }

    public function update(Animal $id){
        request()->validate([
            'nom' => ['required', 'string'],
            'type' => ['required', 'string'],
            'prix' => ['required', 'numeric'],
            'date_naissance' => ['required', 'date'],
        ]);
        $animal = $id;
        $animal->nom = request()->nom;
        $animal->type = request()->type;
        $animal->prix = request()->prix;
        $animal->date_naissance = request()->date_naissance;
        $animal->save();
        return redirect('/animaux/' . $animal->id);
    }

    public function destroy(Animal $id){
        $id->delete();
        return redirect('/animaux');
    }
}
