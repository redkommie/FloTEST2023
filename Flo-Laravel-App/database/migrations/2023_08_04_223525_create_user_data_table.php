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
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',10)->unique();
            $table->string('fullName',50);
            $table->string('address',50);
            $table->string('email',90)->nullable();
            $table->unsignedBigInteger('comm_id');
            $table->foreign('comm_id')->references('id')->on('commerce_data');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};
