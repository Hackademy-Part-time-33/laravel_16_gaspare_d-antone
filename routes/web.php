<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/',[AnimeController::class, 'homepage'] )->name('anime.genre');
Route::get('/anime/category/{id}',[AnimeController::class, 'genre'] )->name('anime.genre.list');

   

