<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Struktur;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun admin pertama — GANTI password ini setelah seed pertama kali!
        User::firstOrCreate(
            ['email' => 'admin@ekskulvoli.sch.id'],
            [
                'name' => 'Pembina Ekskul',
                'password' => Hash::make('ganti-password-ini'),
                'is_admin' => true,
            ]
        );

        // Struktur organisasi default
        if (Struktur::count() === 0) {
            $roles = [
                'Pembina Ekskul', 'Ketua Ekskul', 'Wakil Ketua',
                'Sekretaris', 'Bendahara', 'Koordinator Latihan',
            ];
            foreach ($roles as $i => $role) {
                Struktur::create(['role' => $role, 'name' => '-', 'urutan' => $i]);
            }
        }

        // Berita pembuka
        if (Berita::count() === 0) {
            Berita::create([
                'title' => 'Ekstrakurikuler Bola Voli Resmi Dibentuk',
                'body' => 'Menjawab minat siswa yang selama ini belum punya wadah resmi, sekolah membentuk ekstrakurikuler bola voli, terbuka untuk semua jurusan dan kelas.',
                'tanggal' => now()->toDateString(),
            ]);
            Berita::create([
                'title' => 'Latihan Perdana Digelar di Lapangan Voli Sekolah',
                'body' => 'Latihan rutin diadakan setiap Selasa dan Jumat, pukul 15.00–17.00 WIB, fokus ke teknik dasar: servis, passing, smash, dan blocking.',
                'tanggal' => now()->toDateString(),
            ]);
        }
    }
}
