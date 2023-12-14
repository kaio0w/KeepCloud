@extends('layouts.app')

@section('content')
    <!-- Seu conteúdo específico para a página de criação de sócio -->
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Criar novo sócio</div>
                <div class="card-body">
                    <!-- Seu formulário de criação de sócio -->
                    <form action="{{ route('socios.store') }}" method="POST">
                        <!-- Campos do formulário -->
                        @csrf
                        <!-- Campos do formulário, por exemplo: -->
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <!-- Outros campos do formulário -->

                        <button type="submit" class="btn btn-primary">Criar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
