<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScoreController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('students', StudentController::class)->except(['show']);
Route::resource('subjects', SubjectController::class)->except(['show']);
Route::resource('scores', ScoreController::class)->except(['show']);

Route::get('/scores/filter', [ScoreController::class, 'filter'])->name('scores.filter');
