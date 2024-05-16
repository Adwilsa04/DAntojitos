<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
})->name('inicio');;

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
    return view('pedidos/pedidos');
}) ->name('pedidos');


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


require __DIR__.'/auth.php';
