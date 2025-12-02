<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/V1/home', function () {
        return Inertia::render('V1/Home');
    })->name('V1.home');

    Route::get('/V1/projects', function () {
        return Inertia::render('V1/Projects');
    })->name('V1.projects');
    
    Route::get('/V1/about', function () {
        return Inertia::render('V1/About');
    })->name('V1.about');

    Route::get('/V1/contact', function () {
        return Inertia::render('V1/Contact');
    })->name('V1.contact');

    /* drop down */
    Route::get('/V1/reports/sales', fn() => Inertia::render('V1/Reports/Sales'))->name('reports.sales');
    Route::get('/V1/reports/users', fn() => Inertia::render('V1/Reports/Users'))->name('reports.users');
});
