<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;



// Portfolio Routes
Route::get('/', [PortfolioController::class, 'index']);
Route::get('/index', [PortfolioController::class, 'index']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/portfolio', [PortfolioController::class, 'portfolio']);
Route::get('/portfolio-details', [PortfolioController::class, 'portfolio_details']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/testimonial', [PortfolioController::class, 'testimonial']);
Route::get('/faq', [PortfolioController::class, 'faq']);
Route::get('/error', [PortfolioController::class, 'error']);
Route::get('/blog', [PortfolioController::class, 'blog']);
Route::get('/blog-details', [PortfolioController::class, 'blog_details']);
Route::get('/contact', [PortfolioController::class, 'contact']);

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes (Only for Authenticated Users)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});



// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';
