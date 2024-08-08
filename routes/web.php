<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');


Route::get('/resume', function () {
    return view('resume');
})->name('resume');


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/resume', [PageController::class, 'resume'])->name('resume');



