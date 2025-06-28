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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Coluna de ID auto-incremento (chave primária)
            $table->string('full_name'); // Para o "Nome completo"
            $table->string('educational_email')->unique(); // Para o "E-mail educacional", deve ser único
            $table->string('password'); // Para a "Senha" (será hash)
            $table->rememberToken(); // Coluna para "lembrar-me" em autenticação
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};