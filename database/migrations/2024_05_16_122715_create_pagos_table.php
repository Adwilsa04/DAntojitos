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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->text('email');
            $table->string('tipo_pago');
            $table->text('descripcion_pago');
            $table->string('monto');
            $table->string('nombre_tarjeta');
            $table->string('num_tarjeta');
            $table->string('mes_expiracion');
            $table->string('ano_expiracion');
            $table->string('cvv');
            $table->string('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
