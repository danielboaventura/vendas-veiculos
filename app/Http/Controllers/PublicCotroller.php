<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function veiculos()
    {
        $veiculos = Veiculo::with(['marca', 'modelo', 'cor'])
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('public.veiculos', compact('veiculos'));
    }

    public function detalhes($id)
    {
        $veiculo = Veiculo::with(['marca', 'modelo', 'cor'])
            ->findOrFail($id);

        return view('public.veiculo', compact('veiculo'));
    }
}
