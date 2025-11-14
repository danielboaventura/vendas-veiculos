@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<h2>Bem-vindo ao Painel Administrativo</h2>
<p>Escolha uma categoria para gerenciar:</p>

<ul>
    <li><a href="{{ route('marcas.index') }}">Gerenciar Marcas</a></li>
    <li><a href="{{ route('modelos.index') }}">Gerenciar Modelos</a></li>
    <li><a href="{{ route('cores.index') }}">Gerenciar Cores</a></li>
    <li><a href="{{ route('veiculos.index') }}">Gerenciar Veículos</a></li>
</ul>
@endsection
