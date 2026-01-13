<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cnpj', 'endereco'];

    public function funcionarios(): HasMany {
        return $this->hasMany(Funcionario::class);
    }

    public function clientes(): belongsToMany {
        return $this->belongsToMany(Cliente::class);
    }    
}
