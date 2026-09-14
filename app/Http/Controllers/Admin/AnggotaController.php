<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function approve(Anggota $anggota)
    {
        $anggota->update(['status' => 'aktif']);
        return redirect(route('beranda').'#anggota')->with('success', "{$anggota->nama} diterima jadi anggota aktif.");
    }

    public function reject(Anggota $anggota)
    {
        $anggota->update(['status' => 'ditolak']);
        return redirect(route('beranda').'#anggota')->with('success', "Pendaftaran {$anggota->nama} ditolak.");
    }

    public function destroy(Anggota $anggota)
    {
        // Jaga-jaga: cuma boleh hapus permanen kalau statusnya udah ditolak,
        // biar data pendaftar yang masih pending/aktif gak kehapus gak sengaja.
        if ($anggota->status !== 'ditolak') {
            return redirect(route('beranda').'#anggota')->with('error', 'Cuma pendaftar yang statusnya "ditolak" yang bisa dihapus permanen.');
        }

        $nama = $anggota->nama;
        $anggota->delete();
        return redirect(route('beranda').'#anggota')->with('success', "Data pendaftaran {$nama} berhasil dihapus permanen.");
    }
}
