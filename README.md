# Portal Ekstrakurikuler Bola Voli

Aplikasi web untuk Ekstrakurikuler Bola Voli SMK Negeri 2 Purwakarta. Dibangun menggunakan **Laravel** (PHP) dan **MySQL**, berfungsi sebagai media informasi resmi, publikasi kegiatan, serta sistem pendaftaran anggota secara online.

Disusun oleh: **Rizal Andhika Wijaya** — XII RPL

---

## Daftar Isi

- [Latar Belakang](#latar-belakang)
- [Fitur](#fitur)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Struktur Basis Data](#struktur-basis-data)
- [Instalasi](#instalasi)
- [Petunjuk Penggunaan](#petunjuk-penggunaan)
- [Troubleshooting](#troubleshooting)

---

## Latar Belakang

Sekolah belum memiliki wadah resmi bagi siswa yang berminat pada olahraga bola voli. Aplikasi ini dibangun untuk mendukung ekstrakurikuler tersebut sebagai media informasi, publikasi kegiatan, dan sarana pendaftaran anggota secara online.

## Fitur

| Halaman | Deskripsi |
|---|---|
| **Beranda** | Ringkasan singkat tujuan, jadwal latihan, dan program kegiatan. |
| **Profil** | Latar belakang, tujuan, dan manfaat ekskul secara lebih rinci. |
| **Struktur** | Bagan kepengurusan (Pembina, Ketua, Wakil Ketua, dll), dapat diedit admin. |
| **Berita** | Daftar berita/info terbaru, admin bisa tambah/hapus + upload foto. |
| **Prestasi** | Daftar pencapaian tim, admin bisa tambah/hapus + upload foto. |
| **Galeri** | Dokumentasi foto kegiatan, admin bisa tambah/hapus + upload foto. |
| **Agenda** | Jadwal kegiatan mendatang (tanggal, jam, lokasi). |
| **Anggota** | Roster publik (anggota aktif) + panel admin approve/tolak/hapus pendaftar. |
| **Daftar** | Login/buat akun pengguna biasa, + formulir pendaftaran anggota baru. |

### Sistem Login

- **Admin**: tombol login **tidak ditampilkan** di halaman manapun. Diakses dengan mengetik kata `admin` di keyboard (di luar kotak input), atau menambahkan `?admin` di URL.
- **Pengguna biasa**: login/daftar akun tersedia terbuka di halaman **Daftar**.
- Kedua role dibedakan lewat kolom `is_admin` pada tabel `users`, dijaga oleh middleware `EnsureUserIsAdmin`.

## Teknologi yang Digunakan

- **Backend**: PHP, Laravel
- **Database**: MySQL
- **Templating**: Blade
- **Autentikasi**: Laravel Auth (session-based)
- **Frontend**: HTML, CSS kustom, vanilla JavaScript
- **Upload foto**: Laravel Storage (`storage:link`)

## Struktur Basis Data

| Tabel | Keterangan |
|---|---|
| `users` | Akun admin & pengguna biasa (dibedakan kolom `is_admin`). |
| `strukturs` | Jabatan & nama pengurus organisasi. |
| `beritas` | Judul, isi, foto, tanggal berita. |
| `prestasis` | Judul, deskripsi, foto prestasi. |
| `galeris` | URL foto & keterangan galeri. |
| `agendas` | Nama, tanggal, jam, lokasi kegiatan. |
| `anggotas` | Nama, kelas, no HP, posisi, status (`pending`/`aktif`/`ditolak`). |

## Instalasi

Prasyarat: PHP >= 8.2, Composer, MySQL (bisa lewat XAMPP).

```bash
# 1. Buat project Laravel baru
composer create-project laravel/laravel voli-app
cd voli-app

# 2. Salin semua file dari repo ini (app/, database/, resources/, routes/, public/)
#    ke folder project yang baru dibuat, timpa yang bentrok.
```

Daftarkan middleware admin di `bootstrap/app.php`:

```php
->withMiddleware(function (Middleware $middleware): void {
    $middleware->alias([
        'admin' => \App\Http\Middleware\EnsureUserIsAdmin::class,
    ]);
})
```

Atur `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=voli_db
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan:

```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
php artisan serve
```

Buka `http://127.0.0.1:8000` di browser.

**Akun admin default** (dari seeder):
- Email: `admin@ekskulvoli.sch.id`
- Password: `ganti-password-ini` — **wajib diganti** sebelum dipakai publik (lihat [Troubleshooting](#troubleshooting)).

## Petunjuk Penggunaan

### Sebagai Pengunjung

1. Jelajahi menu Beranda, Profil, Struktur, Berita, Prestasi, Galeri, Agenda, Anggota.
2. Buka menu **Daftar** untuk isi formulir pendaftaran anggota (nama, kelas, no HP, posisi).
3. Status pendaftaran `pending` sampai disetujui admin, setelah itu muncul di daftar Anggota aktif.
4. Membuat akun pribadi (opsional) juga tersedia di menu Daftar.

### Sebagai Admin

1. Ketik `admin` di keyboard (di halaman manapun, di luar kotak input) untuk membuka form login.
2. Login pakai akun admin.
3. Kelola konten (tambah/hapus berita, prestasi, galeri, agenda; edit struktur organisasi) lewat panel admin di tiap halaman.
4. Di halaman Anggota, approve/tolak pendaftar; data yang sudah "ditolak" bisa dihapus permanen.
5. Klik **Keluar** di pojok kanan atas untuk logout.

## Troubleshooting

**Ganti password admin** (lewat `php artisan tinker`):

```php
App\Models\User::where('email','admin@ekskulvoli.sch.id')->update(['password'=>Hash::make('password-baru')]);
```

**Foto tidak muncul setelah upload** — pastikan `php artisan storage:link` sudah pernah dijalankan.

**Halaman error/kosong** — cek `.env` (`DB_CONNECTION`, `DB_DATABASE`), dan pastikan MySQL sudah menyala sebelum `php artisan serve`.
