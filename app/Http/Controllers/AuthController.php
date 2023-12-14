<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate()
    {
        $credentials = [
            'email' => 'usuario@email.com',
            'password' => 'senha123',
        ];

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('/dashboard');
        } else {
            // Credenciais inválidas
            return redirect()->route('login')->withErrors('Credenciais inválidas.');
        }
    }
}