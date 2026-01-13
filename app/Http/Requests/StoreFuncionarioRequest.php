<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuncionarioRequest extends FormRequest
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
            'empresa_id' => ['required'],
            'login' => ['required'],
            'nome' => ['required', 'max:30'],
            'cpf' => ['required'],
            'email' => ['required', 'email', 'unique:funcionarios,email'],
            'endereco' => ['required', 'max:70'],
            'senha' => ['required', 'min:6']
        ];
    }

    public function messages(): array
    {
        return [
            'empresa_id.required' => 'O campo :attribute é obrigatório.',
            'login.required' => 'O campo :attribute é obrigatório.',
            'nome.required' => 'O campo :attribute é obrigatório.',
            'cpf.required' => 'O campo :attribute é obrigatório.',
            'email.unique' => 'Esse e-mail já está em uso.',
            'endereco.required' => 'O campo :attribute é obrigatório.',
            'senha.required' => 'O campo :attribute é obrigatório.'
        ];
    }
}
