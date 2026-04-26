<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cor;
use App\Models\ModeloVeiculo;
use App\Models\StatusVeiculo;
use App\Models\Unidade;
use App\Models\Veiculo;
use App\Models\Marca;
use App\Models\Categoria;


class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ModeloVeiculo::truncate();
        Categoria::truncate();
        Marca::truncate();
        Cor::truncate();
        StatusVeiculo::truncate();
        Unidade::truncate();
        Veiculo::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $cor = Cor::create([
            'col_nome' => 'Vermelho12'
        ]);

        $Marca = Marca::create([
            'col_nome' => 'Wolksvagen'
        ]);


        $Categoria = Categoria::create([
            'col_nome' => 'Hat',
            'col_descricao' => 'TEste'
        ]);

        $Modeloveiculo = ModeloVeiculo::create([
            'col_id_tbl_marca' => $Marca->col_id,
            'col_nome' => 'Mobi',
            'col_id_tbl_categoria_veiculo' => $Categoria->col_id,
            'col_ano_modelo' => '2022',
            'col_ano_fabricacao' => '2022',
            'col_combustivel' => 'Gasolina',
            'col_cambio' => 'Manual',
            'col_ativo' => '1'
        ]);

        $Statusveiculo = StatusVeiculo::create([
            'col_nome' => 'Ativo'
        ]);

        $Unidade = Unidade::create([
            'col_nome' => 'Filial Centro'
        ]);


        $Veiculo = Veiculo::create([
            'col_id_tbl_modelo_veiculo' => $Modeloveiculo->col_id,
            'col_id_tbl_cor' => $cor->col_id,
            'col_id_tbl_status_veiculo' => $Statusveiculo->col_id,
            'col_id_tbl_unidade_atual' => $Unidade->col_id,
            'col_placa' => 'ABC-1234',
            'col_chassi' => '12345678901234567',
            'col_renavam' => '1234567890',
            'col_patrimonio' => '1234567890',
            'col_km_atual' => 12345.6,
            'col_combustivel_percentual' => '100',
            'col_data_aquisicao' => '2022-01-01',
            'col_valor_aquisicao' => '100000.00',
            'col_valor_diaria_base' => '100.00',
            'col_observacoes' => 'Observações'
        ]);
    }
}
