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



Route::get('Formularios/inicio', function() {
    return view('Formularios/inicio');
}) ->name('sesion');

Route::get('Formularios/registro', function() {
    return view('/Formularios/registro');
}) ->name('registro');


Route::get('pedidos', function() {
    return view('pedidos/buffet');
}) ->name('pedidos');

Route::get('/pedidos/buffet', function () {
    return view('pedidos/buffet');
})->name('buffet');

Route::get('/pedidos/decoracion', function () {
    return view('pedidos/decoracion');
})->name('decoracion');

Route::get('/pedidos/picadera', function () {
    return view('pedidos/picadera');
})->name('picadera');



Route::get('pantadmin', function(){
    return view('pantadmin');
}) ->name('pantadmin');


Route::get('inicio', function() {
    return view('pagianPrinci');
}) ->name('volver');

Route::get('registro', function() {
    return view('Formularios/registro');
}) ->name('registrate');

Route::get('sesion', function() {
    return view('Formularios/inicio');
}) ->name('sesion');

Route::get('usuarios', function(){
    return view('manejoadmin/usuarios');
}) ->name('usuarios');

Route::get('Reserva Cita', function(){
    return view('Formularios/formCita');
}) ->name('cita');

Route::get('Editorial decoracion', function(){
    return view('decoracion');
}) ->name('decoracion');


use App\Http\Controllers\PagoController;

Route::post('/pagar', [PagoController::class, 'store'])->name('pagar.store');

use App\Http\Controllers\RegitroClienteController;

Route::resource('registros', RegitroClienteController::class);

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
});

use App\Http\Controllers\CitaController;

Route::get('Manejo Cita', function(){
    return view('manejoadmin/citas');
}) ->name('citas');


Route::resource('citas', CitaController::class);

Route::get('/citas', [App\Http\Controllers\CitaController::class, 'index'])->name('citas.index');
Route::post('/citas', [App\Http\Controllers\CitaController::class, 'store'])->name('citas.store');
Route::delete('/citas/{id}', [App\Http\Controllers\CitaController::class, 'destroy'])->name('citas.destroy');




require __DIR__.'/auth.php';
