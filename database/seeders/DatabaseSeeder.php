<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $empresa = Empresa::create([
            'nome' => 'Empresa Exemplo',
            'cnpj' => '12.345.678/0001-90',
            'endereco' => 'Rua Exemplo, 123'
        ]);
        
        $cliente = Cliente::create([
            'login' => 'cliente1',
            'nome' => 'Cliente Exemplo',
            'cpf' => '123.456.789-00',
            'email' => 'cliente1@example.com',
            'endereco' => 'Rua Cliente, 456',
            'senha' => bcrypt('senha123')
        ]);
        $cliente->empresas()->attach($empresa);
        $cliente->save();
    }
}
