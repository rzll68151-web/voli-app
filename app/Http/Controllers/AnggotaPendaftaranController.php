<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaPendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'string', 'max:50'],
            'no_hp' => ['required', 'string', 'max:20'],
            'posisi' => ['required', 'string', 'max:50'],
        ]);

        Anggota::create([
            'nama' => $data['nama'],
            'kelas' => $data['kelas'],
            'no_hp' => $data['no_hp'],
            'posisi' => $data['posisi'],
            'status' => 'pending',
            'tanggal_daftar' => now()->toDateString(),
        ]);

        return redirect(route('beranda').'#daftar')->with('success', 'Pendaftaran terkirim! Tunggu verifikasi dari pembina ekskul.');
    }
}
 