<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cor extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_cores';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_nome'
    ];


    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'col_id_tbl_cor');
    }
}
