<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;

class PublicController extends Controller
{
    public function home()
    {
        $veiculos = Veiculo::with(['marca', 'modelo', 'cor'])
            ->orderBy('id', 'desc')
            ->take(6)
            ->get();

        return view('public.home', compact('veiculos'));
    }

    public function veiculos()
    {
        $veiculos = Veiculo::with(['marca', 'modelo', 'cor'])
            ->orderBy('id', 'desc')
            ->get();

        return view('public.veiculos', compact('veiculos'));
    }

    public function detalhes($id)
    {
        $veiculo = Veiculo::with(['marca', 'modelo', 'cor', 'fotos'])
            ->findOrFail($id);

        return view('public.veiculo', compact('veiculo'));
    }
}
