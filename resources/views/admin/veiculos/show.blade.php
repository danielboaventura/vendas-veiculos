@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Detalhes do Veículo</h2>

    <div class="card shadow-sm border-0 rounded-4 mb-4">
        <div class="card-body">

        <img src="{{ asset($veiculo->foto_principal ?? 'imagens-carros/sem-imagem.png') }}" 
            class="rounded mb-4" 
            width="300" 
            height="200" 
            style="object-fit: cover">



            <p><strong>ID:</strong> {{ $veiculo->id }}</p>
            <p><strong>Marca:</strong> {{ $veiculo->marca->nome }}</p>
            <p><strong>Modelo:</strong> {{ $veiculo->modelo->nome }}</p>
            <p><strong>Cor:</strong> {{ $veiculo->cor->nome }}</p>
            <p><strong>Ano:</strong> {{ $veiculo->ano }}</p>
            <p><strong>Quilometragem:</strong> {{ $veiculo->quilometragem }} km</p>
            <p><strong>Valor:</strong> R$ {{ number_format($veiculo->valor, 2, ',', '.') }}</p>
            <p><strong>Detalhes:</strong> {{ $veiculo->detalhes }}</p>

            <h5 class="mt-4 fw-bold">Fotos Extras</h5>
            <div class="d-flex flex-wrap gap-3 mt-3">
                @foreach ($veiculo->fotos as $f)
                    <img src="{{ asset($f->url) }}" width="200" height="140" class="rounded" style="object-fit:cover">
                @endforeach
            </div>

            <a href="{{ route('admin.veiculos.index') }}" class="btn btn-secondary mt-4 px-4">Voltar</a>

        </div>
    </div>

</div>
@endsection
