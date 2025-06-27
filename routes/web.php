<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\CompaniesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::get('/salaries', [SalariesController::class, 'index'])->name('salaries');
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');

require __DIR__.'/auth.php';
