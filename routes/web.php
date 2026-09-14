<?php

use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PrestasiController;
use App\Http\Controllers\Admin\StrukturController;
use App\Http\Controllers\AnggotaPendaftaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// ---------- halaman publik: SATU landing page, semua section digabung ----------
Route::get('/', [PageController::class, 'index'])->name('beranda');

// form pendaftaran anggota (publik, siapa aja boleh kirim)
Route::post('/daftar/kirim', [AnggotaPendaftaranController::class, 'store'])->name('anggota.daftar');

// ---------- akun pengguna biasa (section #daftar) ----------
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ---------- login admin (tersembunyi — cuma dibuka lewat trigger JS "admin") ----------
Route::post('/admin-login', [AuthController::class, 'loginAdmin'])->name('admin.login');

// ---------- panel admin (semua route di bawah ini wajib login + is_admin) ----------
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::post('/struktur', [StrukturController::class, 'store'])->name('struktur.store');
    Route::put('/struktur/{struktur}', [StrukturController::class, 'update'])->name('struktur.update');
    Route::delete('/struktur/{struktur}', [StrukturController::class, 'destroy'])->name('struktur.destroy');

    Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::post('/prestasi', [PrestasiController::class, 'store'])->name('prestasi.store');
    Route::delete('/prestasi/{prestasi}', [PrestasiController::class, 'destroy'])->name('prestasi.destroy');

    Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');
    Route::delete('/galeri/{galeri}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
    Route::delete('/agenda/{agenda}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

    Route::post('/anggota/{anggota}/approve', [AnggotaController::class, 'approve'])->name('anggota.approve');
    Route::post('/anggota/{anggota}/reject', [AnggotaController::class, 'reject'])->name('anggota.reject');
    Route::delete('/anggota/{anggota}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
});
