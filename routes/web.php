<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
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