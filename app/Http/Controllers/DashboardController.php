<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Aqui você pode adicionar a lógica para a página do dashboard
        return view('dashboard'); // Isso renderiza a view 'dashboard.blade.php'
    }
}
