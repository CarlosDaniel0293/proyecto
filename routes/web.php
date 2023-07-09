<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\AvanceController;

Route::get('/', function () {
    return view('auth.register');
});

Auth::routes();

#------------Empleados--------------
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
    Route::get('/empleados/crear', [EmpleadoController::class, 'create'])->name('empleados.create');
    Route::post('/empleados/registrar', [EmpleadoController::class, 'store'])->name('empleados.store');
    Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('empleados.edit');
    Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');
    Route::get('/empleados/{empleado}/delete', [EmpleadoController::class, 'delete'])->name('empleados.delete');
    Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');
    Route::get('/empleados/registro', [EmpleadoController::class, 'create'])->name('empleados.registro');
});

#----------------Metas-----------------
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'metas'], function () {
    Route::get('/', [MetaController::class, 'index'])->name('metas.index');
    Route::get('/empleados/{empleado}/metas/create', [MetaController::class, 'create'])->name('empleados.metas.create');
    Route::post('/empleados/{empleado}/metas/store', [MetaController::class, 'store'])->name('metas.store');
    Route::get('/metas/{meta}/edit', [MetaController::class, 'edit'])->name('metas.edit');
    Route::get('/metas/{meta}/delete', [MetaController::class, 'delete'])->name('metas.delete');
    Route::put('/metas/{meta}', [MetaController::class, 'update'])->name('empleados.metas.update');
    Route::post('/metas/{meta}/avances/create', [MetaController::class, 'createAvance'])->name('metas.avances.create');
    Route::post('/metas/{meta}/avances/store', [MetaController::class, 'storeAvance'])->name('metas.avances.store');
    Route::get('/avances/{avance}/edit', [AvanceController::class, 'edit'])->name('metas.avances.edit');
    Route::put('/avances/{avance}', [AvanceController::class, 'update'])->name('metas.avances.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
