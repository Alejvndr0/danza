<?php

use App\Http\Controllers\EstilosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\ClasesController;
use App\Http\Controllers\AsistenciasController;
use App\Http\Controllers\InscripcionesController;
use App\Http\Controllers\PagosController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('/estudiantes', EstudianteController::class);
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/{estudiante}', [EstudianteController::class, 'show'])->name('estudiantes.show');
Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/{estudiante}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');
Route::put('/estudiantes/{estudiante}', [EstudianteController::class, 'update'])->name('estudiantes.update');
Route::delete('/estudiantes/{estudiante}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');

Route::resource('profesores', ProfesoresController::class);
Route::get('/profesores', [ProfesoresController::class, 'index'])->name('profesores.index');
Route::get('/profesores/{profesor}', [ProfesoresController::class, 'show'])->name('profesores.show');
Route::get('/profesores/create', [ProfesoresController::class, 'create'])->name('profesores.create');
Route::post('/profesores', [ProfesoresController::class, 'store'])->name('profesores.store');
Route::get('/profesores/{profesor}/edit', [ProfesoresController::class, 'edit'])->name('profesores.edit');
Route::put('/profesores/{profesor}', [ProfesoresController::class, 'update'])->name('profesores.update');
Route::delete('/profesores/{profesor}', [ProfesoresController::class, 'destroy'])->name('profesores.destroy');

Route::resource('estilos', EstilosController::class);
Route::resource('clases', ClasesController::class);
Route::resource('asistencias', AsistenciasController::class);
Route::resource('inscripciones', InscripcionesController::class);
Route::put('/inscripciones/{inscripcion}', [InscripcionesController::class, 'update'])->name('inscripciones.update');
Route::resource('pagos', PagosController::class);








