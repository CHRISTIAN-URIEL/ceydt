<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\CeydtController;
Route::get('/', [CeydtController::class, 'index'])->name('ceydt.index');
Route::get('/e-commerce', [CeydtController::class, 'ecommerce'])->name('ceydt.ecommerce');

use App\Http\Controllers\ContactoController;
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

use App\Http\Controllers\RegionesController;
Route::get('/regiones/Cholula', [RegionesController::class, 'Cholula'])->name('regiones.RegCholula');

