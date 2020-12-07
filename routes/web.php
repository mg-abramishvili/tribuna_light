<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\SlideController;


Route::resource('/slides', SlideController::class);

Route::get('/','App\Http\Controllers\FrontController@index');
