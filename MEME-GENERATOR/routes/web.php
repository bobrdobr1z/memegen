<?php

use Illuminate\Support\Facades\Route;
useApp\Http\Controllers\MemeController;

Route::get('/', [MemeController::class, 'index']) ->name('home');
Route::get('/generator', [MemeController::class, 'generator'])->name('generator');
Route::post('/generate-meme', [MemeController::class, 'generate'])->name('generate');
Route::post('/save-meme', [MemeController::class, 'save'])->name('save');