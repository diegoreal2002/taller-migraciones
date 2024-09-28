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
        Schema::table('prueba_ventas', function (Blueprint $table) {
            $table->dropColumn(['descripcion', 'fecha_creacion']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prueba_ventas', function (Blueprint $table) {
            $table->text('descripcion');
            $table->date('fecha_creacion');
        });
    }
};
