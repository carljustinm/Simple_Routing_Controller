<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/about-me', [AboutMeController::class, 'index'])->name('about.me');
Route::get('/', [AboutMeController::class, 'index']);
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'index'])->name('hobbies');
