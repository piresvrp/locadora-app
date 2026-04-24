<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_veiculos';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_id_tbl_modelo_veiculo',
        'col_id_tbl_cor',
        'col_id_tbl_unidade_atual',
        'col_id_tbl_status_veiculo',
        'col_placa',
        'col_chassi',
        'col_renavam',
        'col_patrimonio',
        'col_km_atual',
        'col_combustivel_percentual',
        'col_data_aquisicao',
        'col_valor_aquisicao',
        'col_valor_diaria_base',
        'col_observacoes',
        'col_ativo',
    ];

    public function modeloVeiculo()
    {
        return $this->belongsTo(ModeloVeiculo::class, 'col_id_tbl_modelo_veiculo');
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class, 'col_id_tbl_cor');
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class, 'col_id_tbl_unidade_atual');
    }

    public function statusVeiculo()
    {
        return $this->belongsTo(StatusVeiculo::class, 'col_id_tbl_status_veiculo');
    }
}
