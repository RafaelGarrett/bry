<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\EmpresaResource;

class FuncionarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'empresa_id' => new EmpresaResource($this->whenLoaded('empresa')),
            'login' => $this->login,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'senha' => $this->senha,
            'created_at' => $this->created_at,
        ];
    }
}
