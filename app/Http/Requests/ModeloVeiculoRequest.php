<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ModeloVeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'col_id_tbl_marca' => 'required|exists:tbl_marcas,col_id',
            'col_id_tbl_categoria_veiculo' => 'required|exists:tbl_categorias_veiculos,col_id',
            'col_nome' => 'required|string|max:80',
            'col_versao' => 'nullable|string|max:80',
            'col_ano_modelo' => 'nullable|integer',
            'col_ano_fabricacao' => 'nullable|integer',
            'col_combustivel' => 'nullable|string|max:30',
            'col_cambio' => 'nullable|string|max:20',
            'col_ativo' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'col_id_tbl_marca.required' => 'A marca é obrigatória',
            'col_id_tbl_marca.exists' => 'Marca inválida',
            'col_id_tbl_categoria_veiculo.required' => 'A categoria é obrigatória',
            'col_id_tbl_categoria_veiculo.exists' => 'Categoria inválida',
            'col_nome.required' => 'O nome do modelo é obrigatório',
            'col_nome.max' => 'O nome não pode ter mais que 80 caracteres',
            'col_versao.max' => 'A versão não pode ter mais que 80 caracteres',
            'col_combustivel.max' => 'O combustível não pode ter mais que 30 caracteres',
            'col_cambio.max' => 'O câmbio não pode ter mais que 20 caracteres',
            'col_ativo.boolean' => 'O campo ativo deve ser um valor booleano',
        ];
    }
}
