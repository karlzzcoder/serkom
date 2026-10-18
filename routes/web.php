<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactMessageController;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Route Publik Website
|--------------------------------------------------------------------------
*/

// Beranda Utama
Route::get('/', function () {
    $services = Service::take(3)->get();
    $articles = Article::latest()->take(2)->get();
    $galleries = Gallery::latest()->take(6)->get();
    return view('home', compact('services', 'articles', 'galleries'));
})->name('home');

// Profil Perusahaan (Mendukung 'profile.public' & 'profil')
Route::get('/profil', function () {
    return view('profile');
})->name('profile.public');

Route::get('/profile', function () {
    return redirect()->route('profile.public');
})->name('profil');

// Layanan & Produk (Mendukung 'services.public' & 'layanan.public')
Route::get('/layanan', function () {
    $services = Service::all();
    return view('services.index', compact('services'));
})->name('services.public');

Route::get('/services', function () {
    return redirect()->route('services.public');
})->name('layanan.public');

// Artikel & Berita
Route::get('/artikel', [ArticleController::class, 'publicIndex'])->name('articles.public');
Route::get('/artikel/{slug}', [ArticleController::class, 'publicShow'])->name('articles.show');

// Galeri Dokumentasi
Route::get('/galeri', [GalleryController::class, 'publicIndex'])->name('galleries.public');

// Kontak Kami (Mendukung 'contact.public' & 'kontak')
Route::get('/kontak', [ContactMessageController::class, 'publicIndex'])->name('contact.public');
Route::get('/contact', function () {
    return redirect()->route('contact.public');
})->name('kontak');

Route::post('/kontak', [ContactMessageController::class, 'store'])->name('contact.store');


/*
|--------------------------------------------------------------------------
| Route Autentikasi Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Route Panel Admin (Terkunci Middleware Auth)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Dashboard Utama
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Resources CRUD
    Route::resource('services', ServiceController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('galleries', GalleryController::class);
    
    // Pesan Masuk
    Route::get('/messages', [ContactMessageController::class, 'adminIndex'])->name('messages.index');
    Route::delete('/messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
});