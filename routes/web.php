<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Http::get('https://api.jikan.moe/v4/genres/anime')->json();
    return view('homepage');
});
