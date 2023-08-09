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
        Schema::create('commerce_data', function (Blueprint $table) {
            $table->id();
            $table->string('licencia',10)->unique();
            $table->string('raz_social',50);
            $table->string('actividad',50);
            $table->string('direccion',90);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commerce_data');
    }
};
