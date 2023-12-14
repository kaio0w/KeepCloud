@extends('layouts.app') <!-- Use o layout correspondente do seu projeto -->

@section('content')
    <div class="container">
        <h1>Lista de Sócios</h1>

        <a href="{{ route('socios.create') }}" class="btn btn-primary">Novo Sócio</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Endereço</th>
                    <!-- Coloque aqui os outros campos que deseja exibir -->
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($socios as $socio)
                    <tr>
                        <td>{{ $socio->id }}</td>
                        <td>{{ $socio->nome }}</td>
                        <td>{{ $socio->tipo }}</td>
                        <td>{{ $socio->endereco }}</td>
                        <!-- Coloque aqui os outros campos que deseja exibir -->
                        <td>
                            <a href="{{ route('socios.show', $socio->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('socios.edit', $socio->id) }}" class="btn btn-primary">Editar</a>
                            <!-- Coloque aqui outras ações -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
