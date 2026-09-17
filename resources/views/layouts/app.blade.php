<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ request()->routeIs('tentang') ? 'Tentang Website' : 'Ekskul Bola Voli' }} — SMKN 2 Purwakarta</title>
<meta name="description" content="Portal resmi Ekstrakurikuler Bola Voli SMKN 2 Purwakarta untuk informasi, agenda, berita, galeri, roster, dan pendaftaran anggota.">
<meta name="theme-color" content="#10284d">
<meta property="og:title" content="Ekskul Bola Voli SMKN 2 Purwakarta">
<meta property="og:description" content="Kenali tim, cek agenda, lihat dokumentasi, dan gabung ke ekstrakurikuler bola voli.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Work+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav>
  <div class="wrap">
    <a href="{{ route('beranda') }}" class="logo"><span class="dot"></span><span class="logo-full">EKSKUL VOLI</span><span class="logo-short">VOLI</span></a>
    <div class="tabs-wrap" id="tabsWrap">
      <div class="tabs" id="tabs">
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#beranda' : route('beranda').'#beranda' }}">Beranda</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#profil' : route('beranda').'#profil' }}">Profil</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#struktur' : route('beranda').'#struktur' }}">Struktur</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#berita' : route('beranda').'#berita' }}">Berita</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#prestasi' : route('beranda').'#prestasi' }}">Prestasi</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#galeri' : route('beranda').'#galeri' }}">Galeri</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#agenda' : route('beranda').'#agenda' }}">Agenda</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#anggota' : route('beranda').'#anggota' }}">Anggota</a>
        <a class="tab-btn" href="{{ route('tentang') }}">Tentang</a>
        <a class="tab-btn" href="{{ request()->routeIs('beranda') ? '#daftar' : route('beranda').'#daftar' }}">Daftar</a>
      </div>
    </div>
    <div class="nav-right-group">
      @if(request()->routeIs('admin.dashboard'))
        <a class="link-btn" href="{{ route('beranda') }}">Kembali ke landing</a>
      @endif
      <div class="auth-slot">
        @auth
          @if(auth()->user()->is_admin)
            <span class="badge">ADMIN</span>
            <a class="link-btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
              @csrf
              <button type="submit" class="link-btn" style="background:none;">Keluar</button>
            </form>
          @endif
        @else
          {{-- tombol login admin cuma dirender kalau ?admin ada di URL --}}
          @if(request()->has('admin'))
            <button type="button" class="link-btn" style="background:none;" onclick="document.getElementById('loginAdminOverlay').style.display='flex'">Login Admin</button>
          @endif
        @endauth
      </div>
      <button class="hamburger-btn" id="hamburgerBtn" aria-label="Buka menu" aria-expanded="false" type="button">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<div class="toast-stack" id="toastStack" aria-live="polite"></div>

@if(session('success'))
  <script>window.addEventListener('DOMContentLoaded', () => showToast(@json(session('success')), 'ok'));</script>
@endif
@if(session('error'))
  <script>window.addEventListener('DOMContentLoaded', () => showToast(@json(session('error')), 'err'));</script>
@endif
@if($errors->any())
  <script>window.addEventListener('DOMContentLoaded', () => showToast(@json($errors->first()), 'err'));</script>
@endif

<div class="intro-overlay" id="introOverlay" aria-hidden="true">
  <div class="intro-glow intro-glow-one"></div>
  <div class="intro-glow intro-glow-two"></div>
  <div class="intro-logo-wrap">
    <span class="intro-badge">SMKN 2 PURWAKARTA</span>
    <div class="intro-wordmark" aria-label="Ekskul Voli">
      <span class="intro-word">EKSKUL</span>
      <span class="intro-word intro-word-accent">VOLI</span>
    </div>
    <div class="intro-line"></div>
    <p class="intro-subtitle">MAIN NYATA • GAK NGASAL • BANGKIT</p>
  </div>
</div>

<main>
  @yield('content')
</main>

<footer>
  <div class="footer-grid wrap">
    <div><strong>EKSKUL VOLI</strong><span>Portal Ekstrakurikuler Bola Voli SMKN 2 Purwakarta</span></div>
    <div><span>Latihan rutin · Sekolah · Purwakarta</span><span>Diusulkan oleh Rizal Andhika Wijaya — XII RPL</span></div>
  </div>
  <div style="margin-top:12px;">
    <a href="https://www.instagram.com/volleyball.smekda" target="_blank" rel="noopener" aria-label="Instagram @volleyball.smekda" style="display:inline-flex; color:var(--court-wood);">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
        <rect x="2.5" y="2.5" width="19" height="19" rx="5"/>
        <circle cx="12" cy="12" r="4.5"/>
        <circle cx="17.2" cy="6.8" r="1.1" fill="currentColor" stroke="none"/>
      </svg>
    </a>
  </div>
</footer>

@if(config('app.whatsapp'))
  <a class="whatsapp-float" href="https://wa.me/{{ preg_replace('/\D+/', '', config('app.whatsapp')) }}" target="_blank" rel="noopener" aria-label="Hubungi pembina lewat WhatsApp">WhatsApp <span>↗</span></a>
@endif

{{-- modal login admin: tersembunyi, cuma dibuka lewat ?admin di URL atau ngetik "admin" di keyboard --}}
<div id="loginAdminOverlay" style="display:none; position:fixed; inset:0; background:rgba(12,24,48,0.8); z-index:100; align-items:center; justify-content:center; padding:20px;">
  <div class="card" style="max-width:360px; width:100%; background:var(--court-navy-2);">
    <h3 style="font-family:'Bebas Neue'; font-size:1.6rem; margin-bottom:16px;">Login Admin</h3>
    <form method="POST" action="{{ route('admin.login') }}">
      @csrf
      <div class="field"><label>Email</label><input required type="email" name="email" autocomplete="username"></div>
      <div class="field"><label>Password</label><input required type="password" name="password" autocomplete="current-password"></div>
      <div style="display:flex; gap:10px; margin-top:6px;">
        <button class="btn btn-primary btn-small" type="submit">Masuk</button>
        <button class="btn btn-ghost btn-small" type="button" onclick="document.getElementById('loginAdminOverlay').style.display='none'">Batal</button>
      </div>
    </form>
  </div>
</div>

{{-- modal konfirmasi hapus, custom — ganti popup bawaan browser yang polos --}}
<div id="confirmOverlay" class="lp-confirm-overlay">
  <div class="lp-confirm-box">
    <p id="confirmMessage"></p>
    <div class="lp-confirm-actions">
      <button type="button" class="btn btn-ghost btn-small" id="confirmCancelBtn">Batal</button>
      <button type="button" class="btn btn-small lp-confirm-danger" id="confirmOkBtn">Ya, Hapus</button>
    </div>
  </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
