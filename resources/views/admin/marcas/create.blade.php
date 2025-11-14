@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Nova Marca</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <form action="{{ route('admin.marcas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome da Marca</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <button class="btn btn-primary px-4">Salvar</button>
                <a href="{{ route('admin.marcas.index') }}" class="btn btn-light px-4">Cancelar</a>

            </form>

        </div>
    </div>

</div>
@endsection
