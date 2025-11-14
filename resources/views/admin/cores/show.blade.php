@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Detalhes da Cor</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <p><strong>ID:</strong> {{ $cor->id }}</p>
            <p><strong>Cor:</strong> {{ $cor->nome }}</p>

            <a href="{{ route('admin.cores.index') }}" class="btn btn-secondary mt-3 px-4">Voltar</a>

        </div>
    </div>

</div>
@endsection
