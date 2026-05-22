<?php

namespace App\Http\Controllers;

use App\Models\StatusVeiculo;
use App\Http\Requests\StatusVeiculoRequest;

class StatusVeiculoController extends Controller
{
    public function index()
    {
        $statusVeiculos = StatusVeiculo::with(['veiculos'])->get();

        return response()->json([
            'status' => true,
            'data' => $statusVeiculos
        ], 200);
    }

    public function getAll()
    {
        $statusVeiculos = StatusVeiculo::all();
        return response()->json([
            'message' => 'Lista de status de veículos',
            'data' => $statusVeiculos
        ], 200);
    }

    public function store(StatusVeiculoRequest $request)
    {
        $statusVeiculo = StatusVeiculo::create($request->validated());

        return response()->json([
            'message' => 'Status do veículo criado com sucesso',
            'data' => $statusVeiculo
        ], 201);
    }

    public function update(StatusVeiculoRequest $request, $id)
    {
        $statusVeiculo = StatusVeiculo::find($id);
        if (!$statusVeiculo) {
            return response()->json([
                'message' => 'Status do veículo não encontrado'
            ], 404);
        }

        $statusVeiculo->update($request->validated());

        return response()->json([
            'message' => 'Status do veículo atualizado com sucesso',
            'data' => $statusVeiculo
        ], 200);
    }

    public function destroy($id)
    {
        $statusVeiculo = StatusVeiculo::find($id);
        if (!$statusVeiculo) {
            return response()->json([
                'message' => 'Status do veículo não encontrado'
            ], 404);
        }
        $statusVeiculo->delete();

        return response()->json([
            'message' => 'Status do veículo excluído com sucesso',
            'data' => $statusVeiculo
        ], 200);
    }

    public function findById($id)
    {
        $statusVeiculo = StatusVeiculo::find($id);
        if (!$statusVeiculo) {
            return response()->json([
                'message' => 'Status do veículo não encontrado'
            ], 404);
        }
        return response()->json([
            'message' => 'Status do veículo encontrado',
            'data' => $statusVeiculo
        ], 200);
    }
}
