<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Profile;
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

// Profil Perusahaan (Menggunakan firstOrCreate agar data tidak pernah null)
Route::get('/profil', function () {
    $profile = Profile::firstOrCreate(
        ['id' => 1],
        [
            'company_name' => 'PT Solusi Koneksi Anda',
            'about'        => "Berdiri di Indonesia, PT Solusi Koneksi Anda berfokus memberikan fondasi jaringan IT yang stabil, aman, dan dapat diandalkan. Kami percaya bahwa konektivitas yang kuat adalah kunci efisiensi operasional setiap organisasi modern.\n\nDidukung oleh tim insinyur jaringan bersertifikasi, kami melayani perancangan topologi LAN/WAN, manajemen ruang server (rack mounting & PDU), hingga pemeliharaan jaringan berkala dengan skema Service Level Agreement (SLA) yang transparan.",
            'vision'       => 'Menjadi sistem integrator dan penyedia solusi infrastruktur jaringan terdepan di Indonesia yang dikenal atas standar kualitas fisik kabel, keandalan sistem, dan responsifitas layanan teknis.',
            'mission'      => "• Menyediakan instalasi jaringan berstandar industri dengan pengujian parameter fisik yang presisi.\n• Memberikan dukungan teknis cepat, transparan, dan terukur untuk meminimalkan downtime klien.\n• Mengembangkan kompetensi tim teknis secara berkelanjutan seiring perkembangan teknologi IT.",
        ]
    );
    return view('profile', compact('profile'));
})->name('profile.public');

Route::get('/profil', function () {
    $profile = \App\Models\Profile::find(1) ?? \App\Models\Profile::first();
    return view('profile', compact('profile'));
})->name('profile.public');

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

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Route Panel Admin (Terkunci Middleware Auth)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Dashboard Utama
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Profil Perusahaan (Hanya Edit & Update)
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [AdminProfileController::class, 'update'])->name('profile.update');

    // Resources CRUD Modul Lain
    Route::resource('services', ServiceController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('galleries', GalleryController::class);
    
    // Pesan Masuk
    Route::get('/messages', [ContactMessageController::class, 'adminIndex'])->name('messages.index');
    Route::delete('/messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
});