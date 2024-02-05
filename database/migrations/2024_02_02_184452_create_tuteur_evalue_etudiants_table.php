<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tuteur_evalue_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('evaluateur');
            $table->string('evalue');
            $table->integer('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteur_evalue_etudiants');
    }
};
