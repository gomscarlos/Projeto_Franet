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
        Schema::create('indicados', function (Blueprint $table) {
            $table->string('numeroIndicado')->primary();
            $table->string('userfranet_numero');
            $table->foreign('userfranet_numero')->references('numero')->on('userfranets');
            $table->string('nomeIndicado');
            $table->string('parentesco');
            $table->string('cadastradoEm');
            $table->string('situacao');
            $table->string('vencimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indicados');
    }
};
