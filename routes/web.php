<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Hier registreer je de web routes voor de applicatie.
| Deze routes worden geladen door de RouteServiceProvider en
| zijn allemaal toegewezen aan de "web" middleware group.
|
*/

// Homepagina
Route::get('/', function () {
    return view('home'); // Verwijst nu naar home.blade.php
})->name('home');

// Dashboard (alleen toegankelijk na inloggen)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Beveiligde routes (alleen toegankelijk voor ingelogde gebruikers)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Boekenbeheer
    Route::resource('books', BookController::class);

    // Boeken lenen
    Route::resource('borrows', BorrowController::class);

    // Admin boeken overzicht
    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books.index');
});

// Authenticatie routes (login, registratie, wachtwoord reset)
require __DIR__.'/auth.php';
