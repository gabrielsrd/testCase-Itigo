<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\EditorasController;
use App\Http\Controllers\AutoresController;
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
    return view('welcome');
})->name('welcome');

/*
index: GET /livros
show: GET /livros/{livro}
store: POST /livros
create: GET /livros/create 
update: PUT /livros/{livro}
destroy: DELETE /livros/{livro}
edit: GET /livros/{livro}/edit
*/
Route::resource('livros', LivrosController::class);
Route::resource('editoras', EditorasController::class);
Route::resource('autores', AutoresController::class)->parameter('autores', 'autor');
