<?php

use App\Http\Controllers\Sections\WebViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebViewController::class, 'app_view'])->name('welcome');
Route::get('/home', [WebViewController::class, 'home_view'])->name('home');
Route::get('/dashboard', [WebViewController::class, 'dashboard_view'])->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
