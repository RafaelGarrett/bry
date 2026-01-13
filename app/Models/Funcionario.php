<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['empresa_id', 'login', 'nome', 'cpf', 'email', 'endereco', 'senha'];

    public function empresa(): BelongsTo {
        return $this->belongsTo(Empresa::class);
    }
}
