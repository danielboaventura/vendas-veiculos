@extends('layouts.site')

@section('title', 'Início')
@section('description', 'Encontre veículos novos e usados.')

@section('content')

<div class="hero mb-5 shadow">
    <div class="hero-overlay d-flex justify-content-center align-items-center">
        <h1 class="text-white fw-bold display-4">Encontre o carro perfeito para você</h1>
    </div>
</div>

<h2 class="mb-4 fw-semibold">Destaques</h2>

<div class="row">
    @foreach ($veiculos as $v)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">

            <img src="{{ asset($v->foto_principal ?? 'imagens-carros/sem-imagem.png') }}" 
                class="card-img-top" 
                alt="{{ $v->modelo->nome ?? 'Veículo' }}">


                <div class="card-body">
                    <h5 class="card-title">{{ $v->modelo->nome ?? 'Modelo não informado' }}</h5>

                    <p class="text-muted mb-1">
                        {{ $v->marca->nome ?? 'Marca não informada' }} 
                        • {{ $v->ano ?? '--' }}
                    </p>

                    <p class="fw-bold text-success">
                        R$ {{ number_format($v->valor, 2, ',', '.') }}
                    </p>

                    <a href="{{ route('site.veiculo', $v->id) }}" class="btn btn-primary w-100">
                        Ver Detalhes
                    </a>
                </div>

            </div>
        </div>
    @endforeach
</div>

@endsection
