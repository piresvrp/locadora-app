<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'col_nome' => 'required|string|max:80|unique:tbl_cores,col_nome,' . $this->route('id') . ',col_id',
        ];
    }

    public function messages()
    {
        return [
            'col_nome.required' => 'O nome da cor é obrigatório',
            'col_nome.unique' => 'Esta cor já está cadastrada',
            'col_nome.max' => 'O nome não pode ter mais que 80 caracteres',
        ];
    }
}
