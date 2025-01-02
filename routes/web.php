<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/categories', function () {
    return view('pages.categories');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/products', function () {
    return view('pages.product');
});
Route::get('/category/beauty', function () {
    return view('/category/beauty');
});
Route::get('/category/books', function () {
    return view('/category/books');
});
Route::get('/category/electronics', function () {
    return view('/category/electronics');
});
Route::get('/category/fashion', function () {
    return view('/category/fashion');
});
Route::get('/category/home', function () {
    return view('/category/home');
});
Route::get('/category/sports', function () {
    return view('/category/sports');
});
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
