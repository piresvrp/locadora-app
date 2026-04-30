<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MarcaRequest extends FormRequest
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
            'col_nome' => 'required|string|max:80|unique:tbl_marcas,col_nome,' . $this->route('id') . ',col_id',
            'col_ativo' => 'nullable|boolean',
        ];
    }

    public function messages()
    {
        return [
            'col_nome.required' => 'O nome da marca é obrigatório',
            'col_nome.unique' => 'Esta marca já está cadastrada',
            'col_nome.max' => 'O nome não pode ter mais que 80 caracteres',
            'col_ativo.boolean' => 'O campo ativo deve ser um valor booleano',
        ];
    }
}
