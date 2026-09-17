@extends('layouts.app')

@section('content')
<section id="tentang" class="lp-section lp-about about-page">
  <div class="wrap">
    <div class="about-page-top reveal">
      <div>
        <div class="kicker"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="9"/><path d="M12 10v6M12 7.5h.01"/></svg></span>Tentang Portal</div>
        <h1 class="title">Satu Portal<br>Untuk Satu Tim</h1>
      </div>
      <a class="btn btn-ghost btn-small" href="{{ route('beranda') }}">Kembali ke Beranda ↩</a>
    </div>

    <div class="about-grid about-page-grid">
      <div class="reveal">
        <p class="lede">Website ini dibuat sebagai pusat informasi Ekstrakurikuler Bola Voli SMKN 2 Purwakarta. Siswa bisa mengenal ekskul, melihat kegiatan, membaca berita, mengecek agenda, dan mendaftarkan diri sebagai anggota.</p>
        <p class="lede">Portal ini juga membantu pengurus dan pembina mengelola data anggota serta dokumentasi ekskul dengan lebih rapi dan mudah diakses.</p>
        <div class="about-feature-list">
          <div><strong>01</strong><span>Informasi ekskul yang mudah diakses</span></div>
          <div><strong>02</strong><span>Pendaftaran anggota secara online</span></div>
          <div><strong>03</strong><span>Pengelolaan agenda dan dokumentasi tim</span></div>
        </div>
      </div>
      <div class="about-credit reveal" style="transition-delay:.12s;">
        <span class="about-credit-label">Dibuat dan dikembangkan oleh</span>
        <strong>Rizal Andhika Wijaya</strong>
        <span class="about-credit-role">Siswa XII RPL · SMKN 2 Purwakarta</span>
        <div class="about-line"></div>
        <span class="about-credit-note">Untuk mendukung informasi, pendaftaran, dan pengelolaan kegiatan ekskul bola voli.</span>
      </div>
    </div>
  </div>
</section>
@endsection
