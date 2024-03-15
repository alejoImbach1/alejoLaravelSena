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
        Schema::create('cuadraticas', function (Blueprint $table) {
            $table->id();
            $table->float('coeficiente_a');
            $table->float('coeficiente_b');
            $table->float('coeficiente_c');
            $table->float('raiz_1')->nullable();
            $table->float('raiz_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadraticas');
    }
};
