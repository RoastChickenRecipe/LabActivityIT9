<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'viewIndex'])->name('index');
Route::get('/Create-New-User', [indexController::class, 'newUser'])->name('new');

Route::post('/Create-Add-User', [indexController::class, 'displayUser'])->name('add');
