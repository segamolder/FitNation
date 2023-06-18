<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

Route::get('/group-training', \App\Http\Controllers\GroupTrainingController::class)->name('group-training');

Route::get('/personal-training', \App\Http\Controllers\PersonalTrainingController::class)->name('personal-training');

Route::get('/cardio-zone', \App\Http\Controllers\CardioZoneController::class)->name('cardio-zone');

Route::get('/about', \App\Http\Controllers\AboutUsController::class)->name('about');

Route::get('/contacts', \App\Http\Controllers\ContactController::class)->name('contacts');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
