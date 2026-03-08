<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('page.index');
});


// Route::get('/admin/login', function () {
//     return view('admin.login.login');
// });

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard.dashboard')->middleware(['auth', 'verified'])->name('dashboard22');
// });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:3,1')
    ->name('contact.store');
require __DIR__ . '/auth.php';


// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', [ContactController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('admin.dashboard');
//     Route::post('/admin/messages/{id}/read', [ContactController::class, 'markAsRead'])->name('admin.messages.read');
//     Route::post('/admin/messages/mark-all-read', [ContactController::class, 'markAllRead'])->name('admin.messages.mark-all-read');
//     Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
//     Route::get('/admin/messages/search', [ContactController::class, 'search'])->name('admin.messages.search');
// });


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [ContactController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/messages/{id}/read', [ContactController::class, 'markAsRead'])->name('admin.messages.read');
    Route::post('/admin/messages/mark-all-read', [ContactController::class, 'markAllRead'])->name('admin.messages.mark-all-read');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
    Route::get('/admin/messages/search/ajax', [ContactController::class, 'searchAjax'])->name('admin.messages.search.ajax');
});