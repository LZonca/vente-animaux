<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $p1 = New Permission();
        $p1->label = 'Utilisateur';
        $p1->save();

        $p2 = New Permission();
        $p2->label = 'Administrateur';
        $p2->save();

        $p3 = New Permission();
        $p3->label = 'Super-Administrateur';
        $p3->save();
    }
}
