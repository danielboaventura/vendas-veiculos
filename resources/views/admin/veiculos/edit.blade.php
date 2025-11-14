@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Editar Veículo</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <form action="{{ route('admin.veiculos.update', $veiculo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Marca</label>
                        <select name="marca_id" class="form-control" required>
                            @foreach ($marcas as $m)
                                <option value="{{ $m->id }}" {{ $veiculo->marca_id == $m->id ? 'selected' : '' }}>
                                    {{ $m->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Modelo</label>
                        <select name="modelo_id" class="form-control" required>
                            @foreach ($modelos as $mo)
                                <option value="{{ $mo->id }}" {{ $veiculo->modelo_id == $mo->id ? 'selected' : '' }}>
                                    {{ $mo->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Cor</label>
                        <select name="cor_id" class="form-control" required>
                            @foreach ($cores as $c)
                                <option value="{{ $c->id }}" {{ $veiculo->cor_id == $c->id ? 'selected' : '' }}>
                                    {{ $c->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Ano</label>
                        <input type="number" name="ano" class="form-control" value="{{ $veiculo->ano }}" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Quilometragem</label>
                        <input type="number" name="quilometragem" value="{{ $veiculo->quilometragem }}" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Valor</label>
                        <input type="number" name="valor" step="0.01" class="form-control" value="{{ $veiculo->valor }}" required>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="foto_principal" class="form-label">Foto Principal (nome do arquivo)</label>
                    <input type="text" name="foto_principal" id="foto_principal" 
                        class="form-control"
                        value="{{ $veiculo->foto_principal }}"
                        placeholder="ex: corolla.jpg">
                </div>

                @if ($veiculo->foto_principal)
                    <div class="mb-3">
                        <img src="{{ asset('img/carros/' . $veiculo->foto_principal) }}"
                            width="200"
                            class="rounded"
                            style="object-fit: cover;">
                    </div>
                @endif


                <div class="mb-3">
                    <label class="form-label fw-bold">Detalhes</label>
                    <textarea name="detalhes" class="form-control" rows="4">{{ $veiculo->detalhes }}</textarea>
                </div>

                <h5 class="fw-bold mt-4 mb-3">Fotos Extras</h5>

                @foreach ($veiculo->fotos as $f)
                    <div class="mb-3">
                        <input type="text" name="fotos_existentes[{{ $f->id }}]" value="{{ $f->url }}" class="form-control">
                    </div>
                @endforeach

                <h5 class="fw-bold mt-4 mb-3">Adicionar novas fotos</h5>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="fotos_novas[]" class="form-control" placeholder="URL da foto">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="fotos_novas[]" class="form-control" placeholder="URL da foto">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="fotos_novas[]" class="form-control" placeholder="URL da foto">
                    </div>
                </div>

                <button class="btn btn-primary px-4">Salvar Alterações</button>
                <a href="{{ route('admin.veiculos.index') }}" class="btn btn-light px-4">Cancelar</a>

            </form>

        </div>
    </div>

</div>
@endsection
