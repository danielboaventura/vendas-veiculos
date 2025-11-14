@extends('layouts.site')

@section('title', $veiculo->modelo->nome ?? 'Veículo')
@section('description', 'Detalhes completos do veículo selecionado.')

@section('content')

<div class="row">


    <div class="col-md-6">
        <img src="{!! $veiculo->foto_principal ?? '/sem-imagem.png' !!}" 
            class="img-fluid rounded shadow-sm mb-3" 
            alt="{{ $veiculo->modelo->nome ?? 'Veículo' }}">


        <div class="row">
            @forelse ($veiculo->fotos as $foto)
                <div class="col-4 mb-3">
                    <img src="{{ $foto->url }}" class="img-fluid rounded shadow-sm">
                </div>
            @empty
                <p class="text-muted">Nenhuma foto adicional.</p>
            @endforelse
        </div>
    </div>

    <div class="col-md-6">
        <h1 class="fw-bold">{{ $veiculo->modelo->nome ?? 'Modelo não informado' }}</h1>
        <h4 class="text-muted">{{ $veiculo->marca->nome ?? 'Marca não informada' }}</h4>

        <p class="mt-3">
            <strong>Ano:</strong> {{ $veiculo->ano ?? '--' }} <br>
            <strong>Cor:</strong> {{ $veiculo->cor->nome ?? '--' }} <br>
            <strong>Quilometragem:</strong> 
                {{ number_format($veiculo->quilometragem ?? 0, 0, ',', '.') }} km
        </p>

        <h3 class="text-success fw-bold mb-3">
            R$ {{ number_format($veiculo->valor, 2, ',', '.') }}
        </h3>

        @if ($veiculo->detalhes)
            <p class="mt-4">{{ $veiculo->detalhes }}</p>
        @else
            <p class="text-muted">Nenhuma descrição detalhada disponível.</p>
        @endif

        <a href="{{ route('site.veiculos') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>

</div>

@endsection
