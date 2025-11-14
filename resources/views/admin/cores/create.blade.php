@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Nova Cor</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <form action="{{ route('admin.cores.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome da Cor</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <button class="btn btn-primary px-4">Salvar</button>
                <a href="{{ route('admin.cores.index') }}" class="btn btn-light px-4">Cancelar</a>

            </form>

        </div>
    </div>

</div>
@endsection
