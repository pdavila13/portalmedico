<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;

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

Route::get('/pedircita', [HomeController::class, 'index'])->name('falsa');
Route::get('/principio/{name}/ver/{surname}', [HomeController::class, 'index'])->name('index');

//Usando rutas con enlace simbólico
Route::get('/fin', [HomeController::class, 'end'])->name('end');
Route::get('/end', [HomeController::class, 'end'])->name('end');
Route::post('/fin', [HomeController::class, 'save'])->name('savefile');

//Prefijos para aplicaciones grandes
Route::prefix('patients')->group (function () {
    Route::get('/index', function () {
        return view ('patients.index', ['nombre' => 'Paolo Davila']);
    })->name('patients.main');
});

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

//Rutas para Doctors
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::get('doctors/{id}', [DoctorController::class, 'show'])->name('doctors.show');
