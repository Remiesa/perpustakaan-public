<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DetailGenreController;
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
    return view('layouts.home');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/books', [BukuController::class, 'showAll']);

Route::get('/books/search', [BukuController::class, 'index']);

Route::get('/books/{buku:slug}', [BukuController::class, 'showSingle']);

Route::get('/books/genre/{id}', [BukuController::class, 'showGenre']);

Route::get('/books/author/{author}', [BukuController::class, 'showAuthor']);
