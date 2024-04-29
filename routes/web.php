<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Application settings routes
    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::patch('/settings', [SettingController::class, 'update']);

    // Resource routes
    Route::resource('services', ServiceController::class)
        ->except(['create', 'show', 'edit']);

    Route::resource('portfolios', PortfolioController::class)
        ->only(['index', 'store', 'update', 'destroy']);

    Route::resource('educations', EducationController::class)
        ->only(['index', 'store', 'update', 'destroy']);

    Route::resource('experiences', ExperienceController::class)
        ->only(['index', 'store', 'update', 'destroy']);
});

require __DIR__ . '/auth.php';
