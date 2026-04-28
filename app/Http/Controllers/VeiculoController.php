<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\Marca;


class VeiculoController extends Controller
{
    public function getAll()
    {
        $veiculos = Veiculo::all();
        return response()->json([
            'message' => 'Lista de veículos',
            'data' => $veiculos
        ], 200);
    }

    public function store(Request $request)
    {
        $veiculos = Veiculo::create([
            'col_id_tbl_modelo_veiculo' => $request->col_id_tbl_modelo_veiculo,
            'col_id_tbl_cor' => $request->col_id_tbl_cor,
            'col_id_tbl_status_veiculo' => $request->col_id_tbl_status_veiculo,
            'col_id_tbl_unidade_atual' => $request->col_id_tbl_unidade_atual,
            'col_placa' => $request->col_placa,
            'col_chassi' => $request->col_chassi,
            'col_renavam' => $request->col_renavam,
            'col_patrimonio' => $request->col_patrimonio,
            'col_km_atual' => $request->col_km_atual,
            'col_combustivel_percentual' => $request->col_combustivel_percentual,
            'col_data_aquisicao' => $request->col_data_aquisicao,
            'col_valor_aquisicao' => $request->col_valor_aquisicao,
            'col_valor_diaria_base' => $request->col_valor_diaria_base,
            'col_observacoes' => $request->col_observacoes
        ]);

       
        return response()->json([
            'message' => 'Veículo criado com sucesso',
            'data' => $veiculos
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $veiculos = Veiculo::find($id);
        if (!$veiculos) {
            return response()->json([
                'message' => 'Veículo não encontrado'
            ], 404);
        }

        $veiculos->update([
            'col_id_tbl_modelo_veiculo' => $request->col_id_tbl_modelo_veiculo,
            'col_id_tbl_cor' => $request->col_id_tbl_cor,
            'col_id_tbl_status_veiculo' => $request->col_id_tbl_status_veiculo,
            'col_id_tbl_unidade_atual' => $request->col_id_tbl_unidade_atual,
            'col_placa' => $request->col_placa,
            'col_chassi' => $request->col_chassi,
            'col_renavam' => $request->col_renavam,
            'col_patrimonio' => $request->col_patrimonio,
            'col_km_atual' => $request->col_km_atual,
            'col_combustivel_percentual' => $request->col_combustivel_percentual,
            'col_data_aquisicao' => $request->col_data_aquisicao,
            'col_valor_aquisicao' => $request->col_valor_aquisicao,
            'col_valor_diaria_base' => $request->col_valor_diaria_base,
            'col_observacoes' => $request->col_observacoes
        ]);
        return response()->json([
            'message' => 'Veículo atualizado com sucesso',
            'data' => $veiculos
        ], 200);
    }

    public function destroy(Request $request, $id)
    {
        $veiculos = Veiculo::find($id);
        if (!$veiculos) {
            return response()->json([
                'message' => 'Veículo não encontrado'
            ], 404);
        }
        $veiculos->delete();
        return response()->json([
            'message' => 'Veículo excluído com sucesso',
            'data' => $veiculos
        ], 200);
    }

    public function findById($id)
    {
        $veiculos = Veiculo::find($id);
        if (!$veiculos) {
            return response()->json([
                'message' => 'Veículo não encontrado'
            ], 404);
        }
        return response()->json([
            'message' => 'Veículo encontrado',
            'data' => $veiculos
        ], 200);
    }
}
