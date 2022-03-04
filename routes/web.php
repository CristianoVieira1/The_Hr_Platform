<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    WebController,
    ContactController
};


// Home
Route::get('/', [WebController::class, 'home'])->name('home');
// Route::get('/', 'WebController@home')->name('home');

// About
Route::get('/about', [WebController::class, 'about'])->name('about');

// Opportunities
Route::get('/opportunities', [WebController::class, 'opportunities'])->name('opportunities');

// Route::resource('/contact', ContactController::class);

Route::get('/contact', [ContactController::class, 'index']);







