@extends('admin.layout')
@section('title', 'Marcas')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Marcas</h2>
        <a href="{{ route('admin.marcas.create') }}" class="btn btn-primary px-4">Nova Marca</a>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <table class="table table-hover table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($marcas as $marca)
                        <tr>
                            <td>{{ $marca->id }}</td>
                            <td>{{ $marca->nome }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.marcas.show', $marca->id) }}" class="btn btn-sm btn-secondary">Ver</a>
                                <a href="{{ route('admin.marcas.edit', $marca->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('admin.marcas.destroy', $marca->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Nenhuma marca cadastrada.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
