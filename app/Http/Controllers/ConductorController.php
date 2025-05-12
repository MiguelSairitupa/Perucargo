<?php

namespace App\Http\Controllers;
use App\Models\Conductor;

use Illuminate\Http\Request;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conductores = Conductor::all();
        return response()->json($conductores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'licencia' => 'required|string|unique:conductores|max:255',
            'telefono' => 'nullable|string|max:15',
            'fecha_nacimiento' => 'required|date',
        ]);

        $conductor = Conductor::create($validatedData);

        return response()->json([
            'message' => 'Conductor creado exitosamente',
            'conductor' => $conductor,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $conductor = Conductor::findOrFail($id);
        return response()->json($conductor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'licencia' => 'required|string|max:255|unique:conductores,licencia,' . $id,
            'telefono' => 'nullable|string|max:15',
            'fecha_nacimiento' => 'required|date',
        ]);

        $conductor = Conductor::findOrFail($id);
        $conductor->update($validatedData);

        return response()->json([
            'message' => 'Conductor actualizado exitosamente',
            'conductor' => $conductor,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->delete();

        return response()->json([
            'message' => 'Conductor eliminado exitosamente',
        ]);
    }
}
