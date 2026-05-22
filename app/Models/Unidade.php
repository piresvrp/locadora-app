<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Veiculo;

class Unidade extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_unidades';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_nome',
        'col_tipo_unidade',
        'col_telefone',
        'col_email',
        'col_cep',
        'col_logradouro',
        'col_numero',
        'col_bairro',
        'col_cidade',
        'col_uf',
        'col_ativo',
    ];

    public function veiculos()
    {
        return $this->hasMany(
            Veiculo::class,
            'col_id_tbl_unidade_atual',
            'col_id'
        );
    }
}
