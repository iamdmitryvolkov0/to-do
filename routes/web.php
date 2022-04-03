<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\TodolistController::class,'index'])->name('index');
Route::post('/',[\App\Http\Controllers\TodolistController::class,'store'])->name('store');
Route::delete('/{todolist:id}',[\App\Http\Controllers\TodolistController::class,'destroy'])->name('destroy');
