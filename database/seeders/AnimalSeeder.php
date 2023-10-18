<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Animal();
        $a->nom = "bastinou";
        $a->type= "Oiseau";
        $a->prix=5000;
        $a->date_naissance = "2001-09-11";
        $a->save();

        $b = new Animal();
        $b->nom = "mirunaw";
        $b->type= "Rat";
        $b->prix= 500000000;
        $b->date_naissance = "2003-04-03";
        $b->save();

        $c = new Animal();
        $c->nom = "lewow";
        $c->type= "blob";
        $c->prix= 400;
        $c->date_naissance = "2003-10-11";
        $c->save();

        $c = new Animal();
        $c->nom = "mathys";
        $c->type= "le rouw";
        $c->prix= 1;
        $c->date_naissance = "2003-12-11";
        $c->save();
    }
}
