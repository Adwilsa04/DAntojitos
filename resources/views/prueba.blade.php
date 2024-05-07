<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PRUEBA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>Registro de Proveedor</h1>
                <br>
                <form action= "insertar.php" method="POST">
  <label for="id_proveedor">Id del proveedor:</label><br>
  <input type="text" id="id_proveedor" name="id_proveedor"><br>

  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre"><br>

  <label for="apellido">Apellido:</label><br>
  <input  type="text" id="apellido" name="apellido"><br>

  <label for="telefono">Telefono:</label><br>
  <input type="text" id="telefono" name="telefono"><br>
  <br>
  <input type="submit" value="Guardar">
  <br>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
