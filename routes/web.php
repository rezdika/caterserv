<?php

/**
 * CaterServ Web Routes
 * 
 * File ini berisi semua route untuk aplikasi CaterServ
 * Menggunakan controller untuk setiap halaman sesuai prinsip MVC
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\ContactController;


// Halaman utama - menampilkan hero, about, services, dll
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman tentang perusahaan
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Halaman daftar layanan catering
Route::get('/service', [ServiceController::class, 'service'])->name('service');

// Halaman galeri event yang pernah ditangani
Route::get('/event', [EventController::class, 'event'])->name('event');

// Halaman daftar menu makanan
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');


// Halaman form booking
Route::get('/book', [BookingController::class, 'booking'])->name('book');
// Proses submit form booking
Route::post('/book', [BookingController::class, 'store'])->name('book.store');



// Halaman blog/artikel
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

// Halaman tim chef dan staff
Route::get('/team', [TeamController::class, 'team'])->name('team');

// Halaman testimoni pelanggan
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');



// Halaman kontak dengan form
Route::get('/contact', [MassageController::class, 'contact'])->name('contact');
// Proses submit form kontak
Route::post('/contact', [MassageController::class, 'store'])->name('massage.store');

// data contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');


