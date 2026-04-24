<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModeloVeiculo extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_modelos_veiculos';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_id_tbl_marca_veiculo',
        'col_nome',
        'col_ano',
        'col_categoria',
        'col_tipo',
        'col_cambio',
        'col_num_portas',
        'col_numero_passageiros',
        'col_bagageiro_pequeno_qtde',
        'col_bagageiro_grande_qtde',
        'col_observacoes',
        'col_ativo',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'col_id_tbl_marca_veiculo');
    }

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'col_id_tbl_modelo_veiculo');
    }
}
