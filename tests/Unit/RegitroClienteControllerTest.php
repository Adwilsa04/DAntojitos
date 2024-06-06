<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Registro_cliente;

class RegitroClienteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test store method.
     *
     * @return void
     */
    public function testStore()
    {
        // Datos de prueba válidos
        $data = [
            'nombre_cliente' => 'John',
            'apellido_cliente' => 'Doe',
            'telefono_cliente' => '123-456-7890',
            'correo' => 'john.doe@example.com',
            'contrasena' => 'password123',
        ];

        // Realizar una solicitud POST a la ruta de registro
        $response = $this->post(route('registro.store'), $data);

        // Verificar que la respuesta redirige a la ruta esperada
        $response->assertRedirect(route('perfil', ['id' => 1]));

        // Verificar que los datos fueron guardados en la base de datos
        $this->assertDatabaseHas('registro_clientes', [
            'nombre_cliente' => 'John',
            'apellido_cliente' => 'Doe',
            'telefono_cliente' => '123-456-7890',
            'correo' => 'john.doe@example.com',
        ]);
    }

    /**
     * Test store method with invalid data.
     *
     * @return void
     */
    public function testStoreWithInvalidData()
    {
        // Datos de prueba inválidos
        $data = [
            'nombre_cliente' => '',
            'apellido_cliente' => 'Doe',
            'telefono_cliente' => '123-456-7890',
            'correo' => 'john.doe@example.com',
            'contrasena' => 'short',
        ];

        // Realizar una solicitud POST a la ruta de registro
        $response = $this->post(route('registro.store'), $data);

        // Verificar que la respuesta tiene errores de validación
        $response->assertSessionHasErrors(['nombre_cliente', 'contrasena']);
    }
}
