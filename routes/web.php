<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Livewire\ContactSubmissions\Index as ContactSubmissionsIndex;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Marketing routes — locale-aware (Swedish default, English at /en/)
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect'],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('throttle:5,1');
});

// App routes — no locale prefix needed
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('dashboard/submissions', ContactSubmissionsIndex::class)->name('submissions.index');
});

require __DIR__.'/settings.php';
