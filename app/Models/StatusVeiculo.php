<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusVeiculo extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_status_veiculos';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_nome',
        'col_cor',
    ];

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'col_id_tbl_status_veiculo');
    }
}
