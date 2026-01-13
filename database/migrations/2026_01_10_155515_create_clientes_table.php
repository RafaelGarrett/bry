<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('endereco');
            $table->string('senha');
            $table->timestamps();
        });

        Schema::create('cliente_empresa', function (Blueprint $table) {
            $table->foreignId('cliente_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('empresa_id')->constrained()->cascadeOnDelete();
            $table->primary(['cliente_id', 'empresa_id']);
        });
           
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_empresa');
        Schema::dropIfExists('clientes');
    }
};
