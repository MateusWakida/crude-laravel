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
        Schema::up('usuarios', function (Blueprint $table){
            $table->id();
            $table->string('nome')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->integer('cpf')->unique()->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('rua')->nullable(false);
            $table->integer('num_rua')->nullable(false);
            $table->string('complemento')->nullable();
            $table->integer('cep')->nullable(false);
            $table->string('cidade')->nullable(false);
            $table->string('UF', 2)->nullable(false);
            $table->boolean('ativo')->default(true)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
