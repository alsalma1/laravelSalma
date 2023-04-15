<?php

use App\Http\Controllers\MascotaController;
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
    return view('login');
});

Route::get('form', [MascotaController::class,'mostrarForm'])->name('login');
Route::post('form', [MascotaController::class,'logear'])->name('login');

//Pagina principal

Route::get('paginaPrincipal/{sesion}', [MascotaController::class, 'paginaPrincipal'])->name('paginaPrincipal')->middleware('mascota');

//Registrar mascota
Route::get('registrar_mascota', [MascotaController::class, 'formRegistrar'])->name('registrar_mascota');
Route::post('registrar', [MascotaController::class, 'registrar'])->name('registrar');

//Ver foto
Route::get('verFoto/{nick}' , [MascotaController::class, 'mostrarFoto'])->name('foto');


Route::get('laboratoriPrincipal', [MascotaController::class, 'principalLaboratori'])->name('laboratoriPrincipal')->middleware('laboratori');

Route::get('metgePrincipal', [MascotaController::class, 'principalMetge'])->name('metgePrincipal')->middleware('metge');

Route::get('pacientPrincipal', [MascotaController::class, 'principalPacient'])->name('pacientPrincipal')->middleware('pacient');

//Cerrar sesion
Route::get('logout', [MascotaController::class, 'logout']);


//Condiciones

