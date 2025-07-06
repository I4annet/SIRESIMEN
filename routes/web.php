<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.user.beranda');
});

Route::get('/tentang', function() {
    return view('pages.user.tentang');
})->name('tentang');
