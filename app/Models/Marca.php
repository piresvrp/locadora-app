<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ModeloVeiculo;

class Marca extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_marcas';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_nome',
        'col_ativo'
    ];

    public function veiculos()
    {
        return $this->hasMany(ModeloVeiculo::class, 'col_id_tbl_marca');
    }

}
