<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController as Film;
use App\Http\Controllers\GenreController as Genre;
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
    return view('index');
});

Route::group(['prefix' => 'films'], function (){
    Route::get('/',[Film::class,'index'])->name('film.index');
    Route::get('/published',[Film::class,'publishedIndex'])->name('film.published.index');
    Route::get('/create',[Film::class,'create'])->name('film.create');
    Route::get('/edit/{id}',[Film::class,'edit'])->name('film.edit');
    Route::patch('/update/{id}',[Film::class,'update'])->name('film.update');
    Route::post('/store',[Film::class,'store'])->name('film.store');
    Route::get('/{id}',[Film::class,'show'])->name('film.show');
    Route::delete('/delete/{id}',[Film::class,'delete'])->name('film.delete');
});

Route::group(['prefix' => 'genres'], function (){
    Route::get('/',[Genre::class,'index'])->name('genre.index');
    Route::get('/create',[Genre::class,'create'])->name('genre.create');
    Route::get('/edit/{id}',[Genre::class,'edit'])->name('genre.edit');
    Route::get('/{id}/films',[Genre::class,'showFilms'])->name('genre.films.show');
    Route::patch('/update/{id}',[Genre::class,'update'])->name('genre.update');
    Route::post('/store',[Genre::class,'store'])->name('genre.store');
    Route::get('/{id}',[Genre::class,'show'])->name('genre.show');
    Route::delete('/delete/{id}',[Genre::class,'delete'])->name('genre.delete');
});
