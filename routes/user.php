<?php

use App\Http\Controllers\Auth\LoginController;
use App\Wire\User\Dashboard;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
  Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [LoginController::class, 'login']);
  Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

  Route::name('user.')->middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
  });
});
