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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('ano_fabricacao');
            $table->float('valor');
            $table->string('placa')->unique();
            $table->enum('status', ['disponivel', 'alugado', 'manutencao'])->default('disponivel');
            $table->timestamps();
    
            $table->foreign('id_categoria')->references('id')->on('categorias'); //nome da coluna da sua tabela, nome da coluna da foreign key e o noma da tabela
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
