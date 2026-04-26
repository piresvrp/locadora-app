<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'tbl_categorias_veiculos';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_nome',
        'col_descricao',
        'col_qtd_portas',
        'col_capacidade_bagagem',
        'col_capacidade_passageiros'
    ];

    public function modeloVeiculos()
    {
        return $this->hasMany(ModeloVeiculo::class, 'col_id_tbl_categoria_veiculo');
    }
}
