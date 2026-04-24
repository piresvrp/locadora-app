<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locacao extends Model
{
    use SoftDeletes;

    protected $table = 'tbl_locacoes';
    protected $primaryKey = 'col_id';
    protected $fillable = [
        'col_id_tbl_veiculo',
        'col_id_tbl_cliente',
        'col_id_tbl_condutor_adicional',
        'col_id_tbl_funcionario_retirada',
        'col_id_tbl_funcionario_devolucao',
        'col_id_tbl_unidade_retirada',
        'col_id_tbl_unidade_devolucao',
        'col_data_hora_retirada',
        'col_data_hora_devolucao_prevista',
        'col_data_hora_devolucao_real',
        'col_valor_diaria',
        'col_valor_total',
        'col_km_retirada',
        'col_km_devolucao',
        'col_observacoes',
        'col_ativo',
    ];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'col_id_tbl_veiculo');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'col_id_tbl_cliente');
    }

    public function condutorAdicional()
    {
        return $this->belongsTo(CondutorAdicional::class, 'col_id_tbl_condutor_adicional');
    }

    public function funcionarioRetirada()
    {
        return $this->belongsTo(Funcionario::class, 'col_id_tbl_funcionario_retirada');
    }

    public function funcionarioDevolucao()
    {
        return $this->belongsTo(Funcionario::class, 'col_id_tbl_funcionario_devolucao');
    }

    public function unidadeRetirada()
    {
        return $this->belongsTo(Unidade::class, 'col_id_tbl_unidade_retirada');
    }

    public function unidadeDevolucao()
    {
        return $this->belongsTo(Unidade::class, 'col_id_tbl_unidade_devolucao');
    }
}
