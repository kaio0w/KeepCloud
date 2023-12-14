<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Lógica para exibir as informações do perfil do usuário
        return view('profile.show'); // Esta é a view que exibirá as informações do perfil
    }
}
