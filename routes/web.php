<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/principio/{name}/ver/{surname}', [HomeController::class, 'index'])->name('index');

//Usando rutas con enlace simbólico
Route::get('/fin', [HomeController::class, 'end'])->name('end');
Route::get('/end', [HomeController::class, 'end'])->name('end');
Route::post('/fin', [HomeController::class, 'save'])->name('savefile');

//Prefijos para aplicaciones grandes
Route::prefix('nom')->group(
    function ()
    {
        Route::get('/fin', [HomeController::class, 'end'])->name('end');
    }
);

Route::prefix('vac')->group(
    function ()
    {
        Route::get('/fin', [HomeController::class, 'end'])->name('end');
    }
);

