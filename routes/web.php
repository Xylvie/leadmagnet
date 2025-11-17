<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/dashboard', [App\Http\Controllers\LeadsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/leads', [App\Http\Controllers\LeadsController::class, 'store'])->name('leads.store');

route::get('/leads/create', [App\Http\Controllers\LeadsController::class, 'create'])->name('leads.create');

Route::get('/dashboard/export', [App\Http\Controllers\LeadsController::class, 'export'])->middleware(['auth', 'verified'])->name('leads.export');

Route::get('/dashboard/search', [App\Http\Controllers\LeadsController::class, 'search'])->middleware(['auth', 'verified'])->name('leads.search');

Route::delete('/leads/{leads}', [App\Http\Controllers\LeadsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('leads.destroy');
