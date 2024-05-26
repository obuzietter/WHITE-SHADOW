<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/gallery-single', [PagesController::class, 'gallerySingle']);



