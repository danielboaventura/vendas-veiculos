<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Cor;
use Illuminate\Http\Request;

class VeiculoPublicController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::with(['marca', 'modelo', 'cor'])
            ->orderBy('id', 'DESC')
            ->take(6)
            ->get();

        return view('public.home', compact('veiculos'));
    }

    public function veiculos(Request $request)
    {
        $query = Veiculo::with(['marca', 'modelo', 'cor']);

        if ($request->filled('marca')) {
            $query->where('marca_id', $request->marca);
        }

        if ($request->filled('modelo')) {
            $query->where('modelo_id', $request->modelo);
        }

        if ($request->filled('cor')) {
            $query->where('cor_id', $request->cor);
        }

        if ($request->filled('min')) {
            $query->where('valor', '>=', $request->min);
        }

        if ($request->filled('max')) {
            $query->where('valor', '<=', $request->max);
        }

        $veiculos = $query->paginate(12);

        $marcas = Marca::all();
        $modelos = Modelo::all();
        $cores = Cor::all();

        return view('public.veiculos', compact('veiculos', 'marcas', 'modelos', 'cores'));
    }

    public function show($id)
    {
        $veiculo = Veiculo::with(['marca', 'modelo', 'cor', 'fotos'])
            ->findOrFail($id);

        $relacionados = Veiculo::with(['marca', 'modelo'])
            ->where('marca_id', $veiculo->marca_id)
            ->where('id', '!=', $veiculo->id)
            ->limit(4)
            ->get();

        return view('public.veiculo', compact('veiculo', 'relacionados'));
    }
}
