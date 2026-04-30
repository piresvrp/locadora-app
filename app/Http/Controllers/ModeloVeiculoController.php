<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloVeiculo;
use App\Http\Requests\ModeloVeiculoRequest;

class ModeloVeiculoController extends Controller
{
    public function index()
    {
        $modelos = ModeloVeiculo::with([
            'marca',
            'categoria'
        ])->get();

        return response()->json([
            'status' => true,
            'data' => $modelos
        ], 200);
    }

    public function getAll()
    {
        $modelos = ModeloVeiculo::all();
        return response()->json([
            'message' => 'Lista de modelos de veículos',
            'data' => $modelos
        ], 200);
    }

    public function store(ModeloVeiculoRequest $request)
    {
        $modelo = ModeloVeiculo::create($request->validated());

        return response()->json([
            'message' => 'Modelo de veículo criado com sucesso',
            'data' => $modelo
        ], 201);
    }

    public function update(ModeloVeiculoRequest $request, $id)
    {
        $modelo = ModeloVeiculo::find($id);
        if (!$modelo) {
            return response()->json([
                'message' => 'Modelo de veículo não encontrado'
            ], 404);
        }

        $modelo->update($request->validated());

        return response()->json([
            'message' => 'Modelo de veículo atualizado com sucesso',
            'data' => $modelo
        ], 201);
    }

    public function destroy($id)
    {
        $modelo = ModeloVeiculo::find($id);
        if (!$modelo) {
            return response()->json([
                'message' => 'Modelo de veículo não encontrado'
            ], 404);
        }
        $modelo->delete();

        return response()->json([
            'message' => 'Modelo de veículo excluído com sucesso',
            'data' => $modelo
        ], 200);
    }

    public function findById($id)
    {
        $modelo = ModeloVeiculo::find($id);
        if (!$modelo) {
            return response()->json([
                'message' => 'Modelo de veículo não encontrado'
            ], 404);
        }
        return response()->json([
            'message' => 'Modelo de veículo encontrado',
            'data' => $modelo
        ], 201);
    }
}
