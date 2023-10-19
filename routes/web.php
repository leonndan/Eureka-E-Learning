<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\SubCursoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TestController;
use App\Models\Curso;

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
    Route::get('/cursos', [CursoController::class,'index'])->name('cursos'); 
    Route::get('/cursos/create', [CursoController::class, 'create'])->name('cursos.create');
    Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('/cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('/cursos/edit/{curso}', [CursoController::class, 'edit'])->name('cursos.edit');
    // Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
    Route::post('/cursos/update', [CursoController::class, 'update'])->name('cursos.update');
    Route::get('/cursos/delete/{curso}', [CursoController::class, 'delete'])->name('cursos.delete');

    Route::get('/cursos/subcurso', [SubCursoController::class,'index'])->name('subcursos.index');
    Route::get('/cursos/{id}/subcurso/create', [SubCursoController::class, 'create'])->name('subcursos.create');
    Route::post('/cursos/{id}/subcurso', [SubCursoController::class, 'store'])->name('subcursos.store');
    Route::get('/cursos/subcurso/{id}', [SubCursoController::class, 'show'])->name('subcursos.show');
    Route::get('/cursos/subcurso/edit/{subcurso}', [SubCursoController::class, 'edit'])->name('subcursos.edit');
    Route::post('/cursos/subcurso/update', [SubCursoController::class, 'update'])->name('subcursos.update');


    //comments
    Route::post('/cursos/subcurso/{id}/comment', [CommentController::class, 'store'])->name('comments.store');
    Route::post('/cursos/subcursos/{id}/comment', [CommentController::class, 'store2'])->name('comments.store2');

    //quiz

    Route::get('cursos/quiz/{id}',[QuizController::class, 'index'])->name('quiz.index');
    Route::get('cursos/quiz/create/{id}',[QuizController::class, 'create'])->name('quiz.create');
    Route::post('cursos/quiz/submit/{id}',[QuizController::class, 'submit'])->name('quiz.store');
    Route::get('cursos/pdf/{id}',[CursoController::class, 'pdf'])->name('cursos.pdf');
    Route::get('cursos/pdf/{id}',[SubCursoController::class, 'pdf'])->name('subcursos.pdf');
});


Route::get('/contacto', 'App\Http\Controllers\ContactoController@index')->name('contacto');
Route::post('/contacto', 'App\Http\Controllers\ContactoController@guardar')->name('contacto.guardar');
Route::delete("/eliminar/{id}",[ContactoController::class,"eliminar"])->name("contacto.eliminar");

Route::middleware(["auth","admin"])-> group(function()
{
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
});

Route::match(["get","post"],"/botman",[BotManController::class,"handle"]);

