<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cor;
use Illuminate\Http\Request;

class CorController extends Controller
{
    public function index()
    {
        $cores = Cor::all();
        return view('admin.cores.index', compact('cores'));
    }

    public function create()
    {
        return view('admin.cores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'hex' => 'nullable|string|max:7'
        ]);

        Cor::create($request->only('nome', 'hex'));

        return redirect()->route('cores.index');
    }

    public function edit(Cor $cor)
    {
        return view('admin.cores.edit', compact('cor'));
    }

    public function update(Request $request, Cor $cor)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'hex' => 'nullable|string|max:7'
        ]);

        $cor->update($request->only('nome', 'hex'));

        return redirect()->route('cores.index');
    }

    public function destroy(Cor $cor)
    {
        $cor->delete();
        return redirect()->route('cores.index');
    }
}
