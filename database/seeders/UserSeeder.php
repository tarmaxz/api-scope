<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Enfermeiro',
            'email' => 'enfermeiro@example.com',
            'password' => Hash::make('123456'),
            'nurse_type_id' => 2
        ]);

        User::create([
            'name' => 'Gerente',
            'email' => 'gerente@example.com',
            'password' => Hash::make('123456'),
            'nurse_type_id' => 3
        ]);
    }
}
