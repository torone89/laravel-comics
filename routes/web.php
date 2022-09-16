<?php

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

Route::get('/', function () {
    $data = config('comics');
    $comics = $data;
    return view('home', compact('comics'));
})->name('home');


Route::get('characters', function () {
    return view('characters');
})->name('characters');


Route::get('movies', function () {
    return view('movies');
})->name('movies');

Route::get('tv', function () {
    return view('tv');
})->name('tv');

Route::get('games', function () {
    return view('games');
})->name('games');

Route::get('collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('videos', function () {
    return view('videos');
})->name('videos');

Route::get('fans', function () {
    return view('fans');
})->name('fans');

Route::get('news', function () {
    return view('news');
})->name('news');

Route::get('shop', function () {
    return view('shop');
})->name('shop');


Route::get('/comics', function () {
    $data = config('comics');
    $comics = $data;
    return view('products.comics', compact('comics'));
})->name('comics');

// PAGINA DETTAGLI DI UN SINGOLO COMICS
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if (!is_numeric($id) || $id < 0 || $id >= count($comics)) {
        abort(404);
    }
    $comic = $comics[$id];
    return view('products.comic', compact('comic'));
})->name('products.comic');
