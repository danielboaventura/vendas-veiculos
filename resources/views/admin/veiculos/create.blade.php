@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Novo Veículo</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <form action="{{ route('admin.veiculos.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Marca</label>
                        <select name="marca_id" class="form-control" required>
                            <option value="">Selecione</option>
                            @foreach ($marcas as $m)
                                <option value="{{ $m->id }}">{{ $m->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Modelo</label>
                        <select name="modelo_id" class="form-control" required>
                            <option value="">Selecione</option>
                            @foreach ($modelos as $mo)
                                <option value="{{ $mo->id }}">{{ $mo->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Cor</label>
                        <select name="cor_id" class="form-control" required>
                            <option value="">Selecione</option>
                            @foreach ($cores as $c)
                                <option value="{{ $c->id }}">{{ $c->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Ano</label>
                        <input type="number" name="ano" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Quilometragem</label>
                        <input type="number" name="quilometragem" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Valor</label>
                        <input type="number" name="valor" step="0.01" class="form-control" required>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="foto_principal" class="form-label">Foto Principal (nome do arquivo)</label>
                    <input type="text" name="foto_principal" id="foto_principal" class="form-control"
                        placeholder="ex: corolla.jpg">
                </div>


                <div class="mb-3">
                    <label class="form-label fw-bold">Detalhes</label>
                    <textarea name="detalhes" class="form-control" rows="4"></textarea>
                </div>

                <h5 class="fw-bold mt-4 mb-3">Fotos Extras (mínimo 3)</h5>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="fotos[]" class="form-control" placeholder="URL da foto">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="fotos[]" class="form-control" placeholder="URL da foto">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="fotos[]" class="form-control" placeholder="URL da foto">
                    </div>
                </div>

                <button class="btn btn-primary px-4">Salvar</button>
                <a href="{{ route('admin.veiculos.index') }}" class="btn btn-light px-4">Cancelar</a>

            </form>

        </div>
    </div>

</div>
@endsection
