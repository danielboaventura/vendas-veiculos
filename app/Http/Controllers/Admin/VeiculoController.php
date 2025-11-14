<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Cor;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::with(['marca', 'modelo', 'cor'])->get();
        return view('admin.veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $cores = Cor::all();

        return view('admin.veiculos.create', compact('marcas', 'modelos', 'cores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
            'cor_id' => 'required|exists:cores,id',
            'ano' => 'required|integer|min:1900|max:2100',
            'quilometragem' => 'required|integer|min:0',
            'valor' => 'required|numeric|min:0',
            'detalhes' => 'nullable|string',
            'foto_principal' => 'required|string', 
        ]);

        Veiculo::create([
            'marca_id' => $request->marca_id,
            'modelo_id' => $request->modelo_id,
            'cor_id' => $request->cor_id,
            'ano' => $request->ano,
            'quilometragem' => $request->quilometragem,
            'valor' => $request->valor,
            'detalhes' => $request->detalhes,
            'foto_principal' => $request->foto_principal, 
        ]);

        return redirect()->route('veiculos.index');
    }

    public function edit(Veiculo $veiculo)
    {
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $cores = Cor::all();

        return view('admin.veiculos.edit', compact('veiculo', 'marcas', 'modelos', 'cores'));
    }

    public function update(Request $request, Veiculo $veiculo)
    {
        $request->validate([
            'marca_id' => 'required|exists:marcas,id',
            'modelo_id' => 'required|exists:modelos,id',
            'cor_id' => 'required|exists:cores,id',
            'ano' => 'required|integer|min:1900|max:2100',
            'quilometragem' => 'required|integer|min:0',
            'valor' => 'required|numeric|min:0',
            'detalhes' => 'nullable|string',
            'foto_principal' => 'required|string', 
        ]);

        $veiculo->update([
            'marca_id' => $request->marca_id,
            'modelo_id' => $request->modelo_id,
            'cor_id' => $request->cor_id,
            'ano' => $request->ano,
            'quilometragem' => $request->quilometragem,
            'valor' => $request->valor,
            'detalhes' => $request->detalhes,
            'foto_principal' => $request->foto_principal, 
        ]);

        return redirect()->route('veiculos.index');
    }

    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();
        return redirect()->route('veiculos.index');
    }
}
