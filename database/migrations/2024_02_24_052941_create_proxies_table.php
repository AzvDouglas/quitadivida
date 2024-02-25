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
        Schema::create('proxies', function (Blueprint $table) {
            $table->id();
            $table->string('country_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('anonymity')->nullable();
            $table->string('last_checked')->nullable();
            $table->integer('is_google')->nullable();
            $table->integer('is_https')->nullable();
            $table->timestamps();

            $table->unique(['ip', 'port']); //A combinação de 'ip' e 'port' deve ser única para cada registro na tabela.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proxies');
    }
};
