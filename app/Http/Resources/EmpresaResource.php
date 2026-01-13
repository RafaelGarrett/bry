<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpresaResource extends JsonResource
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
            'nome' => $this->nome,
            'cnpj' => $this->cnpj,
            'endereco' => $this->endereco,
            'created_at' => $this->created_at,
            'funcionarios' => FuncionarioResource::collection($this->whenLoaded('funcionarios')),
            'clientes' => ClienteResource::collection($this->whenLoaded('clientes')),
        ];
    }
}
