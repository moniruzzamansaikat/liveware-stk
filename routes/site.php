<?php 

use App\Wire\Site\About;
use App\Wire\Site\Contact;
use App\Wire\Site\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about', About::class)->name('about');