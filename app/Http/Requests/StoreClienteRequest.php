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
            'senha' => ['required', 'string', 'min:6'],
            'empresas' => ['array', 'exists:empresas,id']
        ];
    }

    public function messages(): array
    {
        return [
            'login.required' => 'O campo :attribute é obrigatório.',
            'nome.required' => 'O campo :attribute é obrigatório.',
            'cpf.required' => 'O campo :attribute é obrigatório.',
            'email.unique' => 'Esse e-mail já está em uso.',
            'endereco.required' => 'O campo :attribute é obrigatório.',
            'senha.required' => 'O campo :attribute é obrigatório.',
            'empresas.exists' => 'Empresa não encontrada.'
        ];
    }
}
