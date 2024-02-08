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
        Schema::create('dividas', function (Blueprint $table) {
            $table->id();
            $table->string('credor');
            $table->float('sua_divida');
            $table->float('avista');
            $table->float('desconto')->nullable();
            $table->string('sob_gestao');
            $table->string('cliente_id');
            $table->foreign('cliente_id')->references('cpf')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dividas');
    }
};
