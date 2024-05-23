<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente', 40);
            $table->string('apellido_cliente', 40);
            $table->char('telefono_cliente', 12); // formato: 000-000-0000
            $table->varchar('correo', 100)->unique();
            $table->varchar('contrasena', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_clientes');
    }
}
