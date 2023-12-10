<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $u1 = new User();
        $u1->name = 'admin';
        $u1->password = Hash::make("123456789");
        $u1->email = 'admin@gmail.com';
        $u1->isAdmin = true;
        $u1->save();

        $u2 = new User();
        $u2->name = 'leo';
        $u2->password = Hash::make("123456");
        $u2->email = 'leo@gmail.com';
        $u2->save();
    }
}
