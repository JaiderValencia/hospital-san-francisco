<?php

use App\Http\Controllers\publicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [publicController::class, 'home'])->name('public.home');

Route::get('/services', [publicController::class, 'services'])->name('public.services');