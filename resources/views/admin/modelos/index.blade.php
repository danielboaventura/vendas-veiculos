@extends('admin.layout')
@section('title', 'Modelos')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Modelos</h2>
        <a href="{{ route('admin.modelos.create') }}" class="btn btn-primary px-4">Novo Modelo</a>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <table class="table table-hover table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($modelos as $modelo)
                        <tr>
                            <td>{{ $modelo->id }}</td>
                            <td>{{ $modelo->nome }}</td>
                            <td>{{ $modelo->marca->nome }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.modelos.show', $modelo->id) }}" class="btn btn-sm btn-secondary">Ver</a>
                                <a href="{{ route('admin.modelos.edit', $modelo->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('admin.modelos.destroy', $modelo->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Nenhum modelo cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
