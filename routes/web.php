<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Livewire\ContactSubmissions\Index as ContactSubmissionsIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/kontakt', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('dashboard/submissions', ContactSubmissionsIndex::class)->name('submissions.index');
});

require __DIR__.'/settings.php';
