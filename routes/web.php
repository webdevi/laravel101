<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ProjectController; 
 
Route::get('/', [HomeController::class, 'index']); 
// Route::get('/', 'HomeController@index'); 

Route::get('/hello', [HomeController::class, 'hello']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/projects', [ProjectController::class, 'index']);
