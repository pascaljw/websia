<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\GaleriController;


// Route::get('/', function () {
//     return view('index');
// });
Route::get('dashboard', [AdminController::class, 'index']);
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('slider', SliderController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('dosen', DosenController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('tentang_kami', TentangKamiController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('galeri', GaleriController::class);
});



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('portfolio');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


