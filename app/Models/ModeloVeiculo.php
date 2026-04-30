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
        'col_id_tbl_marca',
        'col_id_tbl_categoria_veiculo',
        'col_nome',
        'col_versao',
        'col_ano_modelo',
        'col_ano_fabricacao',
        'col_combustivel',
        'col_cambio',
        'col_ativo',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'col_id_tbl_marca');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'col_id_tbl_categoria_veiculo');
    }

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'col_id_tbl_modelo_veiculo');
    }
}
