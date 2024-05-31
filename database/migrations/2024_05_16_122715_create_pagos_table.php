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
            $table->string('email');
            $table->string('tipo_pago');
            $table->text('descripcion_pago');
            $table->decimal('monto', 8, 2);
            $table->string('nombre_tarjeta')->nullable();
            $table->string('num_tarjeta')->nullable();
            $table->string('mes_expiracion')->nullable();
            $table->string('ano_expiracion')->nullable();
            $table->string('cvv')->nullable();
            $table->boolean('activo')->default(true);
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
