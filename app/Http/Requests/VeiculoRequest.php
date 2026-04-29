<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class VeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'col_id_tbl_modelo_veiculo' => 'required|exists:tbl_modelos_veiculos,col_id',
            'col_id_tbl_cor' => 'required|exists:tbl_cores,col_id',
            'col_id_tbl_unidade_atual' => 'required|exists:tbl_unidades,col_id',
            'col_id_tbl_status_veiculo' => 'required|exists:tbl_status_veiculos,col_id',
            'col_placa' => 'required|string|max:10|unique:tbl_veiculos,col_placa,' . $this->route('id') . ',col_id',
            'col_chassi' => 'nullable|string|max:50',
            'col_renavam' => 'nullable|string|max:50',
            'col_patrimonio' => 'nullable|string|max:50',
            'col_km_atual' => 'nullable|integer',
            'col_combustivel_percentual' => 'nullable|integer|min:0|max:100',
            'col_data_aquisicao' => 'nullable|date',
            'col_valor_aquisicao' => 'nullable|numeric',
            'col_valor_diaria_base' => 'nullable|numeric',
            'col_observacoes' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'col_placa.required' => 'A placa é obrigatória',
            'col_placa.unique' => 'Essa placa já está cadastrada',
            'col_id_tbl_modelo_veiculo.required' => 'O modelo é obrigatório',
            'col_id_tbl_modelo_veiculo.exists' => 'Modelo inválido',
            'col_id_tbl_cor.required' => 'A cor é obrigatória',
            'col_id_tbl_cor.exists' => 'Cor inválida',
            'col_id_tbl_unidade_atual.required' => 'A unidade é obrigatória',
            'col_id_tbl_unidade_atual.exists' => 'Unidade inválida',
            'col_id_tbl_status_veiculo.required' => 'O status é obrigatório',
            'col_id_tbl_status_veiculo.exists' => 'Status inválido',
        ];
    }

}
