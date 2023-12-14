@extends('layouts.app')

@section('content')
    <!-- Conteúdo do perfil do usuário -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <!-- Aqui você pode exibir as informações do perfil do usuário -->
                        <p>Nome: {{ auth()->user()->name }}</p>
                        <p>Email: {{ auth()->user()->email }}</p>
                        <!-- Adicione outras informações do perfil conforme necessário -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
