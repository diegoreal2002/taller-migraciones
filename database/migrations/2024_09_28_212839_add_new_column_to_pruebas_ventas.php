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
            $table->string('codigo_referencia', 50)->after('descripcion')->unique(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prueba_Ventas', function (Blueprint $table) {
            $table->dropColumn('codigo_referencia');
        });
    }
};
