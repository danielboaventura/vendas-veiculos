@extends('admin.layout')
@section('title', 'Veículos')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Veículos</h2>
        <a href="{{ route('admin.veiculos.create') }}" class="btn btn-primary px-4">Novo Veículo</a>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Ano</th>
                        <th>Preço</th>
                        <th>Disponível</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($veiculos as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->modelo->nome }}</td>
                            <td>{{ $v->cor->nome }}</td>
                            <td>{{ $v->ano }}</td>
                            <td>R$ {{ number_format($v->preco, 2, ',', '.') }}</td>
                            <td>{{ $v->disponivel ? 'Sim' : 'Não' }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.veiculos.show', $v->id) }}" class="btn btn-sm btn-secondary">Ver</a>
                                <a href="{{ route('admin.veiculos.edit', $v->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('admin.veiculos.destroy', $v->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir este veículo?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center p-3">Nenhum veículo cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
