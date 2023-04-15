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
        Schema::create('perros', function (Blueprint $table) {
            $table->string('nick')->primary();
            $table->string('password');
            $table->string('nom');
            $table->enum('raça', ['Boxer', 'Buldog', 'Labrador', 'Caniche']);
            $table->enum('sexe', ['Mascle', 'Femella']);
            $table->integer('edat');
            $table->string('color');
            $table->string('nom_huma');
            $table->integer('telefon_huma');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perros');
    }
};
