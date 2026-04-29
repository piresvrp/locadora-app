<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Http\Requests\VeiculoRequest;


class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::with([
            'modeloVeiculo.marca',
            'cor',
            'unidade',
            'statusVeiculo'
        ])->get();

        return response()->json([
            'status' => true,
            'data' => $veiculos
        ], 201);
    }

    public function getAll()
    {
        $veiculos = Veiculo::all();
        return response()->json([
            'message' => 'Lista de veículos',
            'data' => $veiculos
        ], 201);
    }

    public function store(VeiculoRequest $request)
    {
        $veiculo = Veiculo::create($request->validated());

        return response()->json([
            'message' => 'Veículo criado com sucesso',
            'data' => $veiculo
        ], 201);
    }

    public function update(VeiculoRequest $request, $id)
    {
        $veiculo = Veiculo::find($id);
        if (!$veiculo) {
            return response()->json([
                'message' => 'Veículo não encontrado'
            ], 404);
        }

        $veiculo->update($request->validated());

        return response()->json([
            'message' => 'Veículo atualizado com sucesso',
            'data' => $veiculo
        ], 200);
    }

    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        if (!$veiculo) {
            return response()->json([
                'message' => 'Veículo não encontrado'
            ], 404);
        }
        $veiculo->delete();

        return response()->json([
            'message' => 'Veículo excluído com sucesso',
            'data' => $veiculo
        ], 201);
    }

    public function findById($id)
    {
        $veiculo = Veiculo::find($id);
        if (!$veiculo) {
            return response()->json([
                'message' => 'Veículo não encontrado'
            ], 404);
        }
        return response()->json([
            'message' => 'Veículo encontrado',
            'data' => $veiculo
        ], 201);
    }
}
