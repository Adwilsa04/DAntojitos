<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('pagianPrinci');
}) ->name('inicio');

Route::get('/prueba', function () {
    return view('prueba');
}) ->name('prueba');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inicio', function () {
    return view('pagianPrinci');
}) ->name('inicio');


Route::get('/pagianservi', function () {
    return view('PagSERVI');
}) ->name('pagservi');



/*Route::get('Formularios/inicio', function() {
    return view('Formularios/inicio');
}) ->name('sesion');*/




Route::get('Nuestra historia', function() {
    return view('nosotros');
}) ->name('nosotros');

Route::get('Contactanos', function() {
    return view('contacto');
}) ->name('contacto');


/*Route::get('pedidos', function() {
    return view('pedidos/buffet');
}) ->name('pedidos');*/
 

Route::get('/pantadmin', function(){
    return view('pantadmin');
}) ->name('pantadmin');

/*Route::middleware(['auth.admin'])->group(function () {
    Route::get('/pantadmin', function() {
        return view('pantadmin');
    })->name('pantadmin');
});

*/

Route::get('inicio', function() {
    return view('pagianPrinci');
}) ->name('volver');


Route::get('usuarios', function(){
    return view('manejoadmin/usuarios');
}) ->name('usuarios');

Route::get('Reserva Cita', function(){
    return view('Formularios/formCita');
}) ->name('cita');

Route::get('Editorial decoracion', function(){
    return view('decoracion');
}) ->name('decoracion');

Route::get('Formulario de Pago', function(){
    return view('Formularios/pago');
}) ->name('pago');

Route::get('Detalle', function(){
    return view('Detalle');
}) ->name('Detalle');

Route::get('Cancelar', function(){
    return view('Cancelar');
}) ->name('Cancelar');

Route::get('Inicio de admin', function(){
    return view('Formularios/inicioad');
}) ->name('inicioad');

use App\Http\Controllers\PagoController;
Route::get('/pagos', [PagoController::class, 'index'])->name('pagos.buscar');
Route::get('pagos/id', [PagoController::class, 'index'])->name('pagos.buscarid');
Route::post('/pagar', [PagoController::class, 'store'])->name('pagar.store');
Route::get('/pagos', [PagoController::class, 'index'])->name('pagos.index');
Route::put('/pagos/{id}/toggle', [PagoController::class, 'toggle'])->name('pagos.toggle');


use App\Http\Controllers\RegitroClienteController;
use App\Models\Registro_cliente;

Route::get('/perfil/{id}', function ($id) {
    $registros = Registro_cliente::findOrFail($id);
    return view('perfil', compact('registros'));
})->name('perfil');

Route::post('Formularios/registro', [RegitroClienteController::class, 'store'])->name('registro.store');
Route::patch('/registros/{id}/cambiarEstado', [RegitroClienteController::class, 'cambiarEstado'])->name('registro.cambiarEstado');
Route::get('/registros/buscar', [RegitroClienteController::class, 'buscar'])->name('registro.buscar');
Route::get('/registros/buscarid', [RegitroClienteController::class, 'buscarid'])->name('registro.buscarid');

Route::get('/perfil/{registro}', [RegitroClienteController::class, 'perfil'])->name('perfil');

Route::get('/ultimo-registro', [RegitroClienteController::class, 'ultimoRegistro'])->name('ultimo.registro');

// Route::resource('registros', RegitroClienteController::class);

Route::get('/usuarios', [RegitroClienteController::class, 'index'])->name('usuarios.index');


use App\Http\Controllers\AuthController;

Route::get('login', function () {
    return view('Formularios/inicio');
})->name('login');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('registros', RegitroClienteController::class);

  
    
    Route::get('/pedidos/picadera', function () {
        return view('pedidos/picadera');
    })->name('picadera');
  
});

Route::get('/pedidos/buffet', function () {
    return view('pedidos/buffet');
})->name('buffet');

Route::get('sesion', function() {
    return view('Formularios/inicio');
}) ->name('sesion'); 

Route::get('registro', function() {
    return view('Formularios/registro');
}) ->name('registrate');

Route::get('Confirmación', function(){
    return view('Confirmación');
})->name('Confirmación');

Route::get('perfil', function(){
    return view('perfil');
})->name('perfil');

use App\Http\Controllers\CitaController;

Route::get('Manejo Cita', function(){
    return view('manejoadmin/citas');
}) ->name('citas');


Route::resource('citas', CitaController::class);

Route::get('/citas', [App\Http\Controllers\CitaController::class, 'index'])->name('citas.index');
Route::post('/citas', [App\Http\Controllers\CitaController::class, 'store'])->name('citas.store');
Route::delete('/citas/{id}', [App\Http\Controllers\CitaController::class, 'destroy'])->name('citas.destroy');
Route::get('/manejoadmin/citas/buscarid', [CitaController::class, 'index'])->name('citas.buscarid');
Route::get('/manejoadmin/citas/buscar', [CitaController::class, 'index'])->name('citas.buscar');


use App\Http\Controllers\AdminAuthController;

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

use App\Http\Controllers\MessageController;

Route::post('/contacto', [MessageController::class, 'store'])->name('contacto.store');


require __DIR__.'/auth.php';
