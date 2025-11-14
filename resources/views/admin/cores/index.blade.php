@extends('admin.layout')
@section('title', 'Cores')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Cores</h2>
        <a href="{{ route('admin.cores.create') }}" class="btn btn-primary px-4">Nova Cor</a>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <table class="table table-hover table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Cor</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cores as $cor)
                        <tr>
                            <td>{{ $cor->id }}</td>
                            <td>{{ $cor->nome }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.cores.show', $cor->id) }}" class="btn btn-sm btn-secondary">Ver</a>
                                <a href="{{ route('admin.cores.edit', $cor->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('admin.cores.destroy', $cor->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta cor?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Nenhuma cor cadastrada.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
