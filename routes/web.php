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


Route::get('/products', function () {
    $path = storage_path('pedidos/product.json'); // Ruta al archivo JSON en la carpeta pedidos
    if (!File::exists($path)) {
        abort(404); // Muestra un error 404 si el archivo no existe
    }
    $file = File::get($path); // Obtiene el contenido del archivo
    $products = json_decode($file, true); // Decodifica el contenido JSON a un array
    return view('products.index', ['products' => $products]); // Pasa los productos a la vista
});




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

use App\Http\Controllers\PagoController;

Route::post('/pagar', [PagoController::class, 'store'])->name('pagar.store');

use App\Http\Controllers\RegitroClienteController;

Route::resource('registro', RegitroClienteController::class);

use App\Http\Controllers\Auth\InicioController;

Route::get('login', [InicioController::class, 'showLoginForm'])->name('login');
Route::post('login', [InicioController::class, 'login']);
Route::post('logout', [InicioController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



require __DIR__.'/auth.php';
