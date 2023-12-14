<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nome do Usuário',
            'email' => 'usuario@email.com',
            'password' => Hash::make('senha123'),
        ]);
    }
}
