<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BotManController;
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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/cursos', function () {
        return view('cursos');
    })->name('cursos');
});

Route::get('/contacto', 'App\Http\Controllers\ContactoController@index')->name('contacto');
Route::post('/contacto', 'App\Http\Controllers\ContactoController@guardar')->name('contacto.guardar');
Route::delete("/eliminar/{id}",[ContactoController::class,"eliminar"])->name("contacto.eliminar");

Route::middleware(["auth","admin"])-> group(function()
{
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
});

Route::match(["get","post"],"/botman",[botmanController::class,"handle"]);

