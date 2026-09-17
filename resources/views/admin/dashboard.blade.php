@extends('layouts.app')

@section('content')
<section class="admin-dashboard lp-section">
  <div class="wrap">
    <div class="kicker"><span class="lp-icon">◆</span>Control Room</div>
    <div class="admin-dashboard-head">
      <div>
        <h1 class="title">Dashboard Admin</h1>
        <p class="lede">Pantau pendaftar dan isi portal dari satu tempat. Landing page publik tetap buat pengunjung, halaman ini buat kerjaan admin.</p>
      </div>
      <a class="btn btn-ghost btn-small" href="{{ route('beranda') }}">Lihat Landing ↗</a>
    </div>

    <div class="admin-stat-grid">
      <div class="admin-stat"><span>Anggota aktif</span><strong>{{ $stats['anggota'] }}</strong></div>
      <div class="admin-stat admin-stat-alert"><span>Menunggu review</span><strong>{{ $stats['pending'] }}</strong></div>
      <div class="admin-stat"><span>Berita</span><strong>{{ $stats['berita'] }}</strong></div>
      <div class="admin-stat"><span>Prestasi</span><strong>{{ $stats['prestasi'] }}</strong></div>
      <div class="admin-stat"><span>Galeri</span><strong>{{ $stats['galeri'] }}</strong></div>
      <div class="admin-stat"><span>Agenda dekat</span><strong>{{ $stats['agenda'] }}</strong></div>
    </div>

    <div class="admin-dashboard-grid">
      <div class="admin-dashboard-panel">
        <div class="admin-panel-heading"><h2>Pendaftar masuk</h2><span>{{ $stats['pending'] }} pending</span></div>
        @forelse($pendaftar as $anggota)
          <div class="admin-applicant">
            <div><strong>{{ $anggota->nama }}</strong><span>{{ $anggota->kelas }} · {{ $anggota->posisi }}</span></div>
            <div class="admin-applicant-actions">
              <form method="POST" action="{{ route('admin.anggota.approve', $anggota) }}">@csrf<button class="btn btn-primary btn-small" type="submit">Terima</button></form>
              <form method="POST" action="{{ route('admin.anggota.reject', $anggota) }}">@csrf<button class="btn-danger" type="submit">Tolak</button></form>
            </div>
          </div>
        @empty
          <p class="empty-state">Belum ada pendaftar yang perlu dicek.</p>
        @endforelse
      </div>
      <div class="admin-dashboard-panel">
        <div class="admin-panel-heading"><h2>Kelola konten</h2><span>Quick links</span></div>
        <a class="admin-quick-link" href="{{ route('beranda') }}#berita">Berita <span>Publik ↗</span></a>
        <a class="admin-quick-link" href="{{ route('beranda') }}#prestasi">Prestasi <span>Publik ↗</span></a>
        <a class="admin-quick-link" href="{{ route('beranda') }}#galeri">Galeri <span>Publik ↗</span></a>
        <a class="admin-quick-link" href="{{ route('beranda') }}#agenda">Agenda <span>Publik ↗</span></a>
        <p class="admin-dashboard-note">Form CRUD lama masih tersedia dari section terkait untuk menjaga alur kerja yang sudah ada.</p>
      </div>
    </div>
  </div>
</section>
@endsection
