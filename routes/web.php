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
    return view('pages.welcome');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    // dump($comics);
    return view('pages.comics.index', compact('comics'));
})->name('index.comics');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');

    if ( is_numeric($id) && $id >= 0 && $id < count($comics) ) {
        $prodotto_singolo = $comics[$id];
    }   else {
        abort(404);
    }


    return view('pages.comics.show', compact('prodotto_singolo'));
})->name('show.comic');

