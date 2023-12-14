<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida, redirecione para a página desejada
            return redirect()->intended('/dashboard');
        } else {
            // Autenticação falhou, exiba uma mensagem de erro ou tome outra ação
            session()->flash('message', 'Credenciais inválidas. Por favor, tente novamente.');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.app'); // Layout personalizado
    }
}
