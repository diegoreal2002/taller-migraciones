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
        Schema::create('prueba_ventas', function (Blueprint $table) {
                $table->id();
                $table->string('nombre', 100);
                $table->text('descripcion');
                $table->integer('cantidad')->unsigned();
                $table->decimal('precio', 8, 2);
                $table->boolean('disponible');
                $table->date('fecha_creacion');
                $table->timestamps();
    
                // Modificadores de columnas
                $table->unique('nombre'); // Modificador: unique
                $table->nullableMorphs('detallable'); // Modificador: nullable y morphs
                $table->softDeletes(); // Agrega columna de borrado lógico (deleted_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prueba_ventas');
    }
};
