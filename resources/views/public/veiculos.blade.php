@extends('layouts.site')

@section('title', 'Veículos')
@section('description', 'Lista completa de veículos disponíveis.')

@section('content')

<h1 class="mb-4 fw-bold">Veículos Disponíveis</h1>

<div class="row">
    @forelse ($veiculos as $v)
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm h-100">

                <img src="{!! $v->foto_principal ?? '/sem-imagem.png' !!}" 
                    class="card-img-top" 
                    alt="{{ $v->modelo->nome ?? 'Veículo' }}">


                <div class="card-body">
                    <h5 class="card-title">{{ $v->modelo->nome ?? 'Modelo não informado' }}</h5>
                    <p class="mb-1 text-muted">{{ $v->marca->nome ?? 'Marca não informada' }}</p>

                    <p class="text-success fw-bold">
                        R$ {{ number_format($v->valor, 2, ',', '.') }}
                    </p>

                    <a href="{{ route('site.veiculo', $v->id) }}" 
                       class="btn btn-outline-primary w-100">
                        Detalhes
                    </a>
                </div>

            </div>
        </div>
    @empty
        <p class="text-muted">Nenhum veículo encontrado.</p>
    @endforelse
</div>

{{-- Paginação --}}
<div class="mt-4">
    {{ $veiculos->links() }}
</div>

@endsection
