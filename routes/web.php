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
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\MediaSocialController;
use App\Http\Controllers\ThesisController;
use App\Http\Controllers\TugasAkhirController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('dashboard', [AdminController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('slider', SliderController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('tentang_kami', TentangKamiController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('contacts', kontakController::class);
    Route::resource('partner', PartnerController::class);
    Route::resource('medsos', MediaSocialController::class);
    Route::resource('tugas_akhir', TugasAkhirController::class);
});



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/gallery', [GalleryController::class, 'index'])->name('portfolio');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/details/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/thesis', [ThesisController::class, 'index'])->name('thesis');



