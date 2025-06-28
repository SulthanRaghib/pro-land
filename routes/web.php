<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kontak-kami', [HomeController::class, 'kontakKami'])->name('hubungi.kami');
Route::post('/send-message-email', [HomeController::class, 'sendMessageEmail'])->name('send.message.email');
Route::get('/layanan-kami/proyek-pembangunan', [HomeController::class, 'proyekBangunan'])->name('layanan.proyek.bangunan');
Route::get('/layanan-kami/proyek-baja-ringan', [HomeController::class, 'proyekBajaRingan'])->name('layanan.proyek.baja.ringan');
Route::get('/layanan-kami/proyek-urugan', [HomeController::class, 'proyekUrugan'])->name('layanan.proyek.urugan');
Route::get('/layanan-kami/proyek-tambang', [HomeController::class, 'proyekTambang'])->name('layanan.proyek.tambang');
Route::get('/layanan-kami/konsultan-properti', [HomeController::class, 'konsultanProperti'])->name('layanan.konsultan.properti');
Route::get('/layanan-kami/konsultan-pertambangan', [HomeController::class, 'konsultanPertambangan'])->name('layanan.konsultan.pertambangan');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
