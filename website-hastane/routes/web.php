<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/hizmetlerimiz',[ServiceController::class,'service'])->name('services');
Route::get('/hizmetlerimiz/{slug}',[ServiceController::class,'serviceDetail'])->name('service.detail');
Route::get('/hizmetlerimiz/detay/{slug}',[ServiceController::class,'serviceMain'])->name('service.main');


Route::get('/hakkimizda',[AboutController::class,'index'])->name('about');

Route::get('/blog',[BlogController::class,'index'])->name('blogs');