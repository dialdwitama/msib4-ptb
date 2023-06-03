<?php

declare(strict_types=1);

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\PtbController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');


    Route::resource('ptbs', PtbController::class);
    Route::resource('monevs', MonevController::class);
});

Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('welcome', [PtbController::class, 'welcome'])->name('welcome');

});


require __DIR__ . '/auth.php';
