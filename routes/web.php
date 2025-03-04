<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\CeydtController;


Route::get('/', [CeydtController::class, 'index'])->name('ceydt.index');
Route::get('/e-commerce', [CeydtController::class, 'ecommerce'])->name('ceydt.ecommerce');

