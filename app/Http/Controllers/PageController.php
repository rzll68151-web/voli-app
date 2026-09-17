<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Struktur;

class PageController extends Controller
{
    /**
     * Landing page tunggal — semua section (Beranda, Profil, Struktur, Berita,
     * Prestasi, Galeri, Agenda, Anggota, Daftar) digabung jadi satu halaman
     * yang bisa di-scroll, bukan lagi halaman terpisah per menu.
     */
    public function index()
    {
        $struktur = Struktur::orderBy('urutan')->get();
        $berita = Berita::orderByDesc('tanggal')->get();
        $prestasi = Prestasi::orderByDesc('created_at')->get();
        $galeri = Galeri::orderByDesc('created_at')->get();
        $agenda = Agenda::orderBy('tanggal')->orderBy('jam')->get();
        $anggotaAktif = Anggota::where('status', 'aktif')->orderBy('nama')->get();
        $semuaAnggota = auth()->check() && auth()->user()->is_admin
            ? Anggota::orderByDesc('tanggal_daftar')->get()
            : collect();

        return view('landing', compact(
            'struktur', 'berita', 'prestasi', 'galeri', 'agenda', 'anggotaAktif', 'semuaAnggota'
        ));
    }

    public function about()
    {
        return view('about');
    }
}
