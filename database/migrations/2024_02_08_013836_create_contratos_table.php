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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('contrato');
            $table->date('data_contrato');
            $table->text('descricao');
            $table->float('valor_contrato');
            $table->unsignedBigInteger('divida_id');
            $table->foreign('divida_id')->references( 'id' )->on( 'dividas' )->onDelete('cascade');
            $table->string('cliente_id');
            $table->foreign('cliente_id')->references('cpf')->on('clientes')->onDelete('cascade');
            $table->boolean( 'ativo' )->default( true );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
