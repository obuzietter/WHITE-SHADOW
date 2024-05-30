<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Models\Image;

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/gallery-single', [PagesController::class, 'gallerySingle']);

Route::get('/test', function(){
    // $images = Image::inRandomOrder()->get();
    $images = Image::all();
    
    return view('test')->with('images', $images);
});




