<?php

use App\Http\Controllers\BookController;
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

Route::get("/books",[BookController::class, "index"])->name("books");
Route::get('books/latest', [BookController::class, "latest" ])->name("latest_books");
Route::get('/books/{id}', [BookController::class, "show"])->name("show_book");