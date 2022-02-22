<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookWebController;
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

Route::get('/', [BookWebController::class, 'index'])->name('books');
Route::post('/', [BookWebController::class, 'store']);
Route::get('/books/create', [BookWebController::class, 'create']);
Route::get('/books/{book}', [BookWebController::class, 'show']);
Route::put('/books/{book}', [BookWebController::class, 'update']);
Route::delete('/books/{book}', [BookWebController::class, 'destroy']);
Route::get('/books/edit/{book}', [ 'as' => 'books.edit', 'uses' => 'BookWebController@edit']);
//Route::get('/books/show/{book}', [ 'as' => 'books.show', 'uses' => 'BookWebController@show']);