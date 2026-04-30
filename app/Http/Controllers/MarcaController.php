<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Http\Requests\MarcaRequest;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::with(['veiculos'])->get();

        return response()->json([
            'status' => true,
            'data' => $marcas
        ], 200);
    }

    public function getAll()
    {
        $marcas = Marca::all();
        return response()->json([
            'message' => 'Lista de marcas',
            'data' => $marcas
        ], 200);
    }

    public function store(MarcaRequest $request)
    {
        $marca = Marca::create($request->validated());

        return response()->json([
            'message' => 'Marca criada com sucesso',
            'data' => $marca
        ], 201);
    }

    public function update(MarcaRequest $request, $id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            return response()->json([
                'message' => 'Marca não encontrada'
            ], 404);
        }

        $marca->update($request->validated());

        return response()->json([
            'message' => 'Marca atualizada com sucesso',
            'data' => $marca
        ], 201);
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            return response()->json([
                'message' => 'Marca não encontrada'
            ], 404);
        }
        $marca->delete();

        return response()->json([
            'message' => 'Marca excluída com sucesso',
            'data' => $marca
        ], 200);
    }

    public function findById($id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            return response()->json([
                'message' => 'Marca não encontrada'
            ], 404);
        }
        return response()->json([
            'message' => 'Marca encontrada',
            'data' => $marca
        ], 201);
    }
}
