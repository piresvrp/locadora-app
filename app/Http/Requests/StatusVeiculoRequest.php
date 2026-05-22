<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StatusVeiculoRequest extends FormRequest
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
            'col_nome' => 'required|string|max:40|unique:tbl_status_veiculos,col_nome,' . $this->route('id') . ',col_id',
            'col_permite_locacao' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'col_nome.required' => 'O nome do status é obrigatório',
            'col_nome.unique' => 'Este status já está cadastrado',
            'col_nome.max' => 'O nome não pode ter mais que 40 caracteres',
            'col_permite_locacao.boolean' => 'O campo permite locação deve ser um valor booleano',
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
