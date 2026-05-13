<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUnidadeRequest;
use App\Http\Requests\UpdateUnidadeRequest;
use App\Models\Unidade;

class UnidadeController extends Controller
{
    public function index()
    {
        $unidades = Unidade::with(['veiculos'])->get();

        return response()->json([
            'status' => true,
            'data' => $unidades
        ], 200);
    }

    public function getAll()
    {
        $unidades = Unidade::all();
        return response()->json([
            'message' => 'Lista de unidades',
            'data' => $unidades
        ], 200);
    }

    public function store(StoreUnidadeRequest $request)
    {
        $unidade = Unidade::create($request->validated());

        return response()->json([
            'message' => 'Unidade criada com sucesso',
            'data' => $unidade
        ], 201);
    }

    public function update(UpdateUnidadeRequest $request, $id)
    {
        $unidade = Unidade::find($id);
        if (!$unidade) {
            return response()->json([
                'message' => 'Unidade não encontrada'
            ], 404);
        }

        $unidade->update($request->validated());

        return response()->json([
            'message' => 'Unidade atualizada com sucesso',
            'data' => $unidade
        ], 201);
    }

    public function destroy($id)
    {
        $unidade = Unidade::find($id);
        if (!$unidade) {
            return response()->json([
                'message' => 'Unidade não encontrada'
            ], 404);
        }
        $unidade->delete();

        return response()->json([
            'message' => 'Unidade excluída com sucesso',
            'data' => $unidade
        ], 200);
    }

    public function findById($id)
    {
        $unidade = Unidade::find($id);
        if (!$unidade) {
            return response()->json([
                'message' => 'Unidade não encontrada'
            ], 404);
        }
        return response()->json([
            'message' => 'Unidade encontrada',
            'data' => $unidade
        ], 201);
    }
}
