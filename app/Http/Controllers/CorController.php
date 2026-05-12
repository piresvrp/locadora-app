<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cor;
use App\Http\Requests\CorRequest;

class CorController extends Controller
{
    public function index()
    {
        $cores = Cor::with(['veiculos'])->get();

        return response()->json([
            'status' => true,
            'data' => $cores
        ], 200);
    }

    public function getAll()
    {
        $cores = Cor::all();
        return response()->json([
            'message' => 'Lista de cores',
            'data' => $cores
        ], 200);
    }

    public function store(CorRequest $request)
    {
        $cor = Cor::create($request->validated());

        return response()->json([
            'message' => 'Cor criada com sucesso',
            'data' => $cor
        ], 201);
    }

    public function update(CorRequest $request, $id)
    {
        $cor = Cor::find($id);
        if (!$cor) {
            return response()->json([
                'message' => 'Cor não encontrada'
            ], 404);
        }

        $cor->update($request->validated());

        return response()->json([
            'message' => 'Cor atualizada com sucesso',
            'data' => $cor
        ], 201);
    }

    public function destroy($id)
    {
        $cor = Cor::find($id);
        if (!$cor) {
            return response()->json([
                'message' => 'Cor não encontrada'
            ], 404);
        }
        $cor->delete();

        return response()->json([
            'message' => 'Cor excluída com sucesso',
            'data' => $cor
        ], 200);
    }

    public function findById($id)
    {
        $cor = Cor::find($id);
        if (!$cor) {
            return response()->json([
                'message' => 'Cor não encontrada'
            ], 404);
        }
        return response()->json([
            'message' => 'Cor encontrada',
            'data' => $cor
        ], 201);
    }
}
