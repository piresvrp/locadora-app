<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateUnidadeRequest extends FormRequest
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
            'col_nome' => 'sometimes|required|string|max:120',
            'col_tipo_unidade' => 'nullable|string|max:30',
            'col_telefone' => 'nullable|string|max:20',
            'col_email' => 'nullable|email|max:120',
            'col_cep' => 'nullable|string|max:10',
            'col_logradouro' => 'nullable|string|max:150',
            'col_numero' => 'nullable|string|max:20',
            'col_bairro' => 'nullable|string|max:80',
            'col_cidade' => 'nullable|string|max:80',
            'col_uf' => 'nullable|string|size:2',
            'col_ativo' => 'nullable|boolean',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'message' => 'Erro de validação nos campos.',
            'errors' => $validator->errors()
        ], 422));
    }
}
