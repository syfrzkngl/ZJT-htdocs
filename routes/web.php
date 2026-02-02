<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

