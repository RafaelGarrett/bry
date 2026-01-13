<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'login' => ['required', 'max:10'],
            'nome' => ['required', 'max:30'],
            'cpf' => ['required'],
            'email' => ['required', 'email', 'unique:clientes,email'],
            'endereco' => ['required', 'max:70'],
            'senha' => ['required', 'string', 'min:6']
        ];
    }
}
