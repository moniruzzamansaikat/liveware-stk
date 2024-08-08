<?php

use App\Wire\Site\About;
use App\Wire\Site\Contact;
use App\Wire\Site\Home;
use App\Wire\User\Dashboard;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
  Route::get('/', Home::class);
  Route::get('/contact', Contact::class);
  Route::get('/about', About::class);
});

Auth::routes();

Route::get('/dashboard', Dashboard::class)->name('user.dashboard');
