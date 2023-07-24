<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditorasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editoras = Editora::all();
        return view('editoras.index', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('editoras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Editora::create($request->all());
        return redirect()->route('editoras.index')->with('success', 'Editora criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Editora $editora)
    {
        return view('editoras.show', compact('editora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editora $editora)
    {
        return view('editoras.edit', compact('editora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editora $editora)
    {
        $editora->update($request->all());
        return redirect()->route('editoras.index')->with('success', 'Editora atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editora $editora)
    {
        $editora->delete();
        return redirect()->route('editoras.index')->with('success', 'Editora deletado com sucesso!');
    }
}
