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
        $a->img_link = "https://imgs.search.brave.com/witlc1hPaNwvLwFlsX_YW6q-NXRD20FlZz50fI84lB4/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMuYm9yZWRwYW5k/YS5jb20vYmxvZy93/cC1jb250ZW50L3V1/dXBsb2Fkcy9wZXJm/ZWN0LXRpbWluZy1h/bmltYWwtcGljdHVy/ZXMvYW1hemluZy1h/bmltYWwtcGljdHVy/ZXMtMzUuanBn";
        $a->save();

        $b = new Animal();
        $b->nom = "mirunaw";
        $b->type= "Rat";
        $b->prix= 500000000;
        $b->date_naissance = "2003-04-03";
        $b->img_link = "https://imgs.search.brave.com/YIixJi7tzZL445gt4swub1dXLSve5AZYDRb-xlvCC1I/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9teW1v/ZGVybm1ldC5jb20v/d3Avd3AtY29udGVu/dC91cGxvYWRzLzIw/MTcvMDcvcGV0LXJh/dC1waG90b2dyYXBo/eS1kaWFuZS1vemRh/bWFyLTkuanBn";
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
