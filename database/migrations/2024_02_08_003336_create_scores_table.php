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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->foreign('cpf')->references('cpf')->on('clients')->onDelete('cascade');
            $table->string('contatos_id');
            $table->string('csb8');
            $table->string('csb8_faixa');
            $table->string('csba');
            $table->string('csba_faixa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
