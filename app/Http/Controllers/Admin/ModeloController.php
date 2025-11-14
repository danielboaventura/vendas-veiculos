<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::with('marca')->get();
        return view('admin.modelos.index', compact('modelos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('admin.modelos.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'marca_id' => 'required|exists:marcas,id'
        ]);

        Modelo::create($request->only('nome', 'marca_id'));

        return redirect()->route('modelos.index');
    }

    public function edit(Modelo $modelo)
    {
        $marcas = Marca::all();
        return view('admin.modelos.edit', compact('modelo', 'marcas'));
    }

    public function update(Request $request, Modelo $modelo)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'marca_id' => 'required|exists:marcas,id'
        ]);

        $modelo->update($request->only('nome', 'marca_id'));

        return redirect()->route('modelos.index');
    }

    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->route('modelos.index');
    }
}
