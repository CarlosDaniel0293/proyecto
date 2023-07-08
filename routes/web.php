<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MetaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and will be assigned
| to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();


#------------Empleados--------------
Route::group(['middleware' => 'auth'], function () {
    Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
    Route::get('/empleados/crear', [EmpleadoController::class, 'create'])->name('empleados.create');
    Route::post('/empleados/guardar', [EmpleadoController::class, 'store'])->name('empleados.store');
    Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
    Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');
    Route::get('/empleados/{empleado}/delete', [EmpleadoController::class, 'delete'])->name('empleados.delete');
    Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
});

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/empleados/registro', [EmpleadoController::class, 'create'])->name('empleados.registro');
Route::post('/empleados/registrar', [EmpleadoController::class, 'store'])->name('empleados.registrar');


#----------------Metas-----------------
Route::group(['middleware' => 'auth', 'prefix' => 'metas'], function () {
    Route::get('/metas', [MetaController::class, 'index'])->name('metas.index');
    Route::get('/empleados/{empleado}/metas/create', [MetaController::class, 'create'])->name('empleados.metas.create');
    Route::post('/empleados/{empleado}/metas/store', [MetaController::class, 'store'])->name('empleados.metas.store');
    // Rutas para crear, editar, eliminar metas, según tus necesidades
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
