<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('Inicio');

Auth::routes();


Route::middleware(['auth'])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('ingresos', App\Http\Controllers\IngresoController::class)->except(['index']);
    Route::get('/in/coinu/{user}', [App\Http\Controllers\IngresoController::class, 'index'])->name('ingresos');

    Route::resource('egresos', App\Http\Controllers\EgresoController::class)->except(['index']);
    Route::get('/eg/coinu/{user}', [App\Http\Controllers\EgresoController::class, 'index'])->name('egresos');

    Route::get('/graphics' , [App\Http\Controllers\HomeController::class, 'graphics'])->name('graphics');


});
