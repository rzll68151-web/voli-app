<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'stats' => [
                'anggota' => Anggota::where('status', 'aktif')->count(),
                'pending' => Anggota::where('status', 'pending')->count(),
                'berita' => Berita::count(),
                'prestasi' => Prestasi::count(),
                'galeri' => Galeri::count(),
                'agenda' => Agenda::whereDate('tanggal', '>=', now()->toDateString())->count(),
            ],
            'pendaftar' => Anggota::where('status', 'pending')->orderByDesc('tanggal_daftar')->get(),
        ]);
    }
}
