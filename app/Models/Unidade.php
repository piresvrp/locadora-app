<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'tbl_unidades';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_nome',
        'col_endereco',
        'col_cidade',
        'col_estado',
        'col_pais',
        'col_cep',
        'col_telefone',
        'col_email',
        'col_ativo',
    ];

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'col_id_tbl_unidade_atual');
    }
}
