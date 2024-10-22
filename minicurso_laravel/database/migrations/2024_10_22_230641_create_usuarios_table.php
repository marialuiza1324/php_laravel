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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique(); //unique -> valor único (não pode ter outro igual)
            $table->date('data_nascimento');
            $table->string('endereco')->nullable(); //nullable -> aceita null
            $table->string('telefone')->nullable();
            $table->string('email');
            $table->string('senha');
            $table->enum('tipo_usuario', ['cliente', 'admin'])->default('cliente'); //enum -> escolhe quais das opções, nesse caso, cliente ou admin. Por padrão será cliente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
