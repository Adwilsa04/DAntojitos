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
        Schema::create('regitro_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('apellido_cliente');
            $table->char('telefono_cliente');
            $table->text('correo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regitro_clientes');
    }
};
