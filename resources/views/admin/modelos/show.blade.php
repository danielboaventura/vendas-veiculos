@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Detalhes do Modelo</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <p><strong>ID:</strong> {{ $modelo->id }}</p>
            <p><strong>Modelo:</strong> {{ $modelo->nome }}</p>
            <p><strong>Marca:</strong> {{ $modelo->marca->nome }}</p>

            <a href="{{ route('admin.modelos.index') }}" class="btn btn-secondary mt-3 px-4">Voltar</a>

        </div>
    </div>

</div>
@endsection
