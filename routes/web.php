<?php

use App\Http\Controllers\PortfolioController;

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
