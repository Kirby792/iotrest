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
        Schema::create('sensors_', function (Blueprint $table) {
            $table->id();
            $table->string("type"); // tipo de snesor 
            $table->decimal("value", 20, 2); // valor del sensor 
            $table->datetime("date"); // fecha u hora de la lectura
            $table->string("user"); // usuario que realizo la lectura
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors_');
    }
};
