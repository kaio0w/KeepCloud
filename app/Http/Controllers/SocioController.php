<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::all();
        return view('socios.index', compact('socios'));
    }

    public function create()
    {
        return view('socios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'tipo_socio' => 'required|in:silver,gold',
            'endereco' => 'nullable',
            'cep' => 'required|regex:/^\d{5}-\d{3}$/',
        ]);

        // Realiza a requisição à API do ViaCEP
        $cep = str_replace('-', '', $request->cep);
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->successful()) {
            $enderecoCompleto = $response->json();
            $endereco = $enderecoCompleto['logradouro'] ?? '';
            $endereco .= ', ' . $enderecoCompleto['bairro'] ?? '';
            $endereco .= ', ' . $enderecoCompleto['localidade'] ?? '';
            $endereco .= ' - ' . $enderecoCompleto['uf'] ?? '';
            
            $request->merge(['endereco' => $endereco]);
        } else {
            return redirect()->back()->withErrors(['cep' => 'CEP inválido']);
        }

        Socio::create($request->all());

        return redirect()->route('socios.index')->with('success', 'Sócio cadastrado com sucesso!');
    }

}
