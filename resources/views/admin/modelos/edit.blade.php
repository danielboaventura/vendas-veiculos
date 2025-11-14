@extends('admin.layout')

@section('content')
<div class="container mt-4">

    <h2 class="fw-bold mb-4">Editar Modelo</h2>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">

            <form action="{{ route('admin.modelos.update', $modelo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome do Modelo</label>
                    <input type="text" name="nome" value="{{ $modelo->nome }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Marca</label>
                    <select name="marca_id" class="form-control" required>
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" @if($marca->id == $modelo->marca_id) selected @endif>
                                {{ $marca->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary px-4">Salvar Alterações</button>
                <a href="{{ route('admin.modelos.index') }}" class="btn btn-light px-4">Cancelar</a>

            </form>

        </div>
    </div>

</div>
@endsection
