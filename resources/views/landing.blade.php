@extends('layouts.app')

@section('content')

{{-- ===================== HERO / BERANDA ===================== --}}
<section id="beranda" class="lp-hero">
  <div class="wrap lp-hero-grid">
    <div class="lp-hero-copy">
      <div class="lp-badge reveal"><span class="lp-icon" style="width:14px; height:14px; display:inline-block; vertical-align:-2px; margin-right:4px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/></svg></span>SMKN 2 Purwakarta • Open Recruitment 2026/2027</div>
      <h1 class="lp-hero-title reveal" style="transition-delay:.08s;">EKSTRAKURIKULER<br>BOLA VOLI<br><span>SMKN 2 PURWAKARTA</span></h1>
      <p class="lede reveal lp-hero-subtitle" style="transition-delay:.16s;">Latihan konsisten, kerja sama solid, dan semangat juang tinggi. Gabung ke tim yang siap bangun prestasi dan ngebawa nama sekolah ke lapangan.</p>
      <div class="reveal lp-hero-actions" style="transition-delay:.24s;">
        <a href="#daftar" class="btn btn-primary">Gabung Sekarang</a>
        <a href="#agenda" class="btn btn-ghost">Jadwal Latihan</a>
        <a href="#anggota" class="btn btn-ghost">Lihat Anggota</a>
      </div>
      <div class="lp-hero-stats reveal" style="transition-delay:.32s;">
        <div><strong data-count="{{ $anggotaAktif->count() }}">0</strong><span>anggota aktif</span></div>
        <div><strong data-count="{{ $prestasi->count() }}">0</strong><span>prestasi</span></div>
        <div><strong data-count="{{ $agenda->count() }}">0</strong><span>agenda dekat</span></div>
      </div>
    </div>
    <div class="lp-hero-visual reveal" style="transition-delay:.2s;">
      <svg viewBox="0 0 400 320" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="floorGrad" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%" stop-color="#1e4777"/>
            <stop offset="52%" stop-color="#10345f"/>
            <stop offset="100%" stop-color="#071a38"/>
          </linearGradient>
          <linearGradient id="ballGradWhite" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#FFFDF6"/>
            <stop offset="100%" stop-color="#E4DCC5"/>
          </linearGradient>
          <linearGradient id="ballGradBlue" x1="0" y1="0" x2="1" y2="1">
            <stop offset="0%" stop-color="#b7d0db"/>
            <stop offset="100%" stop-color="#3d789d"/>
          </linearGradient>
          <radialGradient id="ballShadow" cx="50%" cy="50%" r="50%">
            <stop offset="0%" stop-color="#000000" stop-opacity="0.4"/>
            <stop offset="100%" stop-color="#000000" stop-opacity="0"/>
          </radialGradient>
        </defs>

        <rect width="400" height="320" rx="12" fill="url(#floorGrad)"/>
        <circle cx="92" cy="94" r="92" fill="#407fa9" opacity=".05"/>
        <circle cx="318" cy="242" r="112" fill="#c75d49" opacity=".05"/>

        <!-- lantai lapangan bergaris kayu halus -->
        <g stroke="rgba(243,239,227,0.035)" stroke-width="10">
          <line x1="0" y1="75" x2="400" y2="75"/><line x1="0" y1="95" x2="400" y2="95"/>
          <line x1="0" y1="135" x2="400" y2="135"/><line x1="0" y1="155" x2="400" y2="155"/>
          <line x1="0" y1="195" x2="400" y2="195"/><line x1="0" y1="215" x2="400" y2="215"/>
        </g>

        <!-- garis lapangan -->
        <rect x="30" y="60" width="340" height="200" fill="none" stroke="#d36a52" stroke-width="4"/>

        <!-- net -->
        <g opacity="0.85">
          <line x1="200" y1="34" x2="200" y2="286" stroke="#e4bd55" stroke-width="4"/>
          <rect x="185" y="52" width="30" height="9" fill="#e4bd55" rx="1.5"/>
          <g stroke="#e4bd55" stroke-width="0.6" opacity="0.42">
            <line x1="188" y1="62" x2="188" y2="258"/><line x1="194" y1="62" x2="194" y2="258"/>
            <line x1="206" y1="62" x2="206" y2="258"/><line x1="212" y1="62" x2="212" y2="258"/>
            <line x1="182" y1="72" x2="218" y2="72"/><line x1="182" y1="92" x2="218" y2="92"/>
            <line x1="182" y1="112" x2="218" y2="112"/><line x1="182" y1="132" x2="218" y2="132"/>
            <line x1="182" y1="152" x2="218" y2="152"/><line x1="182" y1="172" x2="218" y2="172"/>
            <line x1="182" y1="192" x2="218" y2="192"/><line x1="182" y1="212" x2="218" y2="212"/>
            <line x1="182" y1="232" x2="218" y2="232"/>
          </g>
        </g>

        <!-- bayangan bola -->
        <ellipse class="hero-ball-shadow hero-ball-shadow-one" cx="140" cy="243" rx="24" ry="7" fill="url(#ballShadow)"/>
        <ellipse class="hero-ball-shadow hero-ball-shadow-two" cx="266" cy="181" rx="20" ry="6" fill="url(#ballShadow)"/>

        <!-- bola voli tim putih -->
        <g class="hero-ball hero-ball-one" transform="translate(140,160)">
          <circle r="19" fill="url(#ballGradWhite)"/>
          <g stroke="#B98A4A" stroke-width="1.3" fill="none" opacity="0.75">
            <path d="M-15,-8 Q0,-19 15,-8"/>
            <path d="M-15,8 Q0,19 15,8"/>
            <path d="M-17,0 Q0,-8 17,0"/>
            <path d="M-17,0 Q0,8 17,0"/>
          </g>
        </g>

        <!-- bola voli tim biru, posisi lebih tinggi (efek melayang) -->
        <g class="hero-ball hero-ball-two" transform="translate(266,140)">
          <circle r="16" fill="url(#ballGradBlue)"/>
          <g stroke="#1B3A57" stroke-width="1.1" fill="none" opacity="0.7">
            <path d="M-12,-7 Q0,-16 12,-7"/>
            <path d="M-12,7 Q0,16 12,7"/>
            <path d="M-14,0 Q0,-7 14,0"/>
            <path d="M-14,0 Q0,7 14,0"/>
          </g>
        </g>
      </svg>
      <span class="lp-hero-edge-glow" aria-hidden="true"></span>
      <div class="lp-hero-score"><span>SMKN 2 PURWAKARTA</span><strong>PLAY<br><em>TOGETHER</em></strong><small>SEASON 2026/27</small></div>
      <div class="lp-hero-tag">Pusat Pembinaan Atlet Voli Sekolah <span>● OPEN</span></div>
    </div>
  </div>
</section>

<div class="lp-recruitment-strip" aria-label="Pendaftaran anggota baru">
  <div class="wrap"><span class="lp-strip-mark">01</span><strong>OPEN RECRUITMENT</strong><span>Siap latihan, berkembang, dan jadi bagian dari tim?</span><a href="#daftar">Daftar sekarang <span aria-hidden="true">↗</span></a></div>
</div>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== PROFIL ===================== --}}
<section id="profil" class="lp-section">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 21V4a1 1 0 0 1 1-1h9l3 3h3v9h-9l-3-3H6"/></svg></span>Bab I — Latar Belakang</div>
    <h2 class="title reveal">Profil Organisasi</h2>
    <div class="grid-2">
      <p class="lede lp-profile-copy" style="max-width:none;">
        Olahraga bukan cuma soal fisik — ini soal karakter. Bola voli ngajarin kerja sama tim, kedisiplinan,
        dan sportivitas dengan cara yang gak bisa didapet dari kelas biasa. Banyak siswa suka main voli,
        tapi sampai sekarang belum ada wadah resminya di sekolah. Ekskul ini dibentuk buat ngisi celah itu:
        tempat siswa nyalurin minat dan bakat di bidang olahraga secara terstruktur, sekaligus nyiapin tim
        sekolah buat ikut kejuaraan dan turnamen antarsekolah.
      </p>
      <div class="item-list lp-value-grid">
        <div class="list-card reveal"><div><h3>Kerja Sama Tim</h3><p>Voli gak bisa dimenangin sendirian — tiap poin butuh koordinasi enam pemain di lapangan.</p></div></div>
        <div class="list-card reveal" style="transition-delay:.08s;"><div><h3>Kedisiplinan</h3><p>Latihan rutin dua kali seminggu ngebentuk kebiasaan konsisten, bukan cuma pas mood main.</p></div></div>
        <div class="list-card reveal" style="transition-delay:.16s;"><div><h3>Sportivitas</h3><p>Menang atau kalah, tim tetap satu — nilai yang dibawa sampai di luar lapangan.</p></div></div>
      </div>
    </div>

    <div class="kicker reveal" style="margin-top:48px;"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="1"fill="currentColor" stroke="none"/></svg></span>Bab I — Tujuan &amp; Manfaat</div>
    <h2 class="title reveal">Apa yang Mau Dicapai</h2>
    <div class="split">
      <div class="reveal">
        <h3>Tujuan</h3>
        <ol>
          <li>Membentuk wadah pembinaan bakat siswa di bidang bola voli.</li>
          <li>Meningkatkan kebugaran jasmani dan kerja sama tim siswa.</li>
          <li>Mempersiapkan tim sekolah untuk mengikuti kejuaraan.</li>
        </ol>
      </div>
      <div class="reveal" style="transition-delay:.1s;">
        <h3>Manfaat</h3>
        <ul>
          <li>Siswa bisa nyalurin minat dan bakat di bidang olahraga.</li>
          <li>Melatih kedisiplinan, kekompakan, dan sportivitas.</li>
          <li>Sekolah bisa harum lewat prestasi olahraga.</li>
          <li>Nambah variasi kegiatan ekstrakurikuler yang tersedia.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== STRUKTUR ===================== --}}
<section id="struktur" class="lp-section lp-alt">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="5" r="2.3"/><circle cx="6" cy="18.5" r="2.3"/><circle cx="18" cy="18.5" r="2.3"/><path d="M12 7.3V12M12 12L6.6 16.6M12 12l5.4 4.6"/></svg></span>Organigram</div>
    <h2 class="title reveal">Struktur Organisasi</h2>

    <div class="org-chart">
      @forelse($struktur as $n)
        <div class="org-row reveal" style="transition-delay:{{ min($loop->index * 0.06, 0.4) }}s;">
          <div class="org-node">
            <div class="role">{{ $n->role }}</div>
            <div class="name">{{ $n->name ?: '-' }}</div>
          </div>
        </div>
      @empty
        <div class="empty-state">Belum ada jabatan.</div>
      @endforelse
    </div>

    @auth
      @if(auth()->user()->is_admin)
        <div class="admin-panel">
          <span class="admin-tag">Panel Admin — Edit Struktur</span>
          <div class="item-list">
            @foreach($struktur as $n)
              <div class="list-card">
                <form method="POST" action="{{ route('admin.struktur.update', $n) }}" style="flex:1; display:flex; gap:10px; flex-wrap:wrap;">
                  @csrf @method('PUT')
                  <input name="role" value="{{ $n->role }}" style="background:var(--court-navy-2); border:1px solid rgba(243,239,227,0.15); color:var(--chalk); padding:6px 10px; font-size:0.82rem; max-width:180px;">
                  <input name="name" value="{{ $n->name }}" placeholder="Nama" style="background:var(--court-navy-2); border:1px solid rgba(243,239,227,0.15); color:var(--chalk); padding:6px 10px; font-size:0.82rem; max-width:180px;">
                  <button type="submit" class="btn btn-ghost btn-small">Simpan</button>
                </form>
                <form method="POST" action="{{ route('admin.struktur.destroy', $n) }}" class="confirm-delete" data-confirm-msg="Hapus jabatan ini?">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn-danger">Hapus</button>
                </form>
              </div>
            @endforeach
          </div>
          <form method="POST" action="{{ route('admin.struktur.store') }}" class="form-box" style="margin-top:14px; display:flex; gap:10px;">
            @csrf
            <input required name="role" placeholder="Nama jabatan baru" style="flex:1; background:var(--court-navy-2); border:1px solid rgba(243,239,227,0.15); color:var(--chalk); padding:10px 12px;">
            <button type="submit" class="btn btn-ghost btn-small">+ Tambah Jabatan</button>
          </form>
        </div>
      @endif
    @endauth
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== BERITA ===================== --}}
<section id="berita" class="lp-section lp-news">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="14" height="15" rx="1"/><path d="M17 9h3a1 1 0 0 1 1 1v8a2 2 0 0 1-2 2H6"/><line x1="6.5" y1="9" x2="13.5" y2="9"/><line x1="6.5" y1="12.5" x2="13.5" y2="12.5"/><line x1="6.5" y1="16" x2="10.5" y2="16"/></svg></span>Info Ekskul</div>
    <h2 class="title reveal">Berita</h2>

    <div class="item-list news-list">
      @forelse($berita as $b)
        <div class="list-card reveal" style="transition-delay:{{ min($loop->index * 0.06, 0.4) }}s;">
          @if($b->image)
            <img src="{{ $b->image }}" alt="{{ $b->title }}" style="width:120px; height:90px; object-fit:cover; border-radius:2px; flex-shrink:0; border:1px solid rgba(243,239,227,0.1);" onerror="this.style.display='none'">
          @endif
          <div style="flex:1;">
            <div class="meta">{{ $b->tanggal->format('Y-m-d') }}</div>
            <h3>{{ $b->title }}</h3>
              <p>{{ \Illuminate\Support\Str::limit($b->body, 155) }}</p>
          </div>
          @auth
            @if(auth()->user()->is_admin)
              <form method="POST" action="{{ route('admin.berita.destroy', $b) }}" class="confirm-delete" data-confirm-msg="Hapus berita ini?">
                @csrf @method('DELETE')
                <button type="submit" class="btn-danger">Hapus</button>
              </form>
            @endif
          @endauth
        </div>
      @empty
        <div class="empty-state">Belum ada berita.</div>
      @endforelse
    </div>

    @auth
      @if(auth()->user()->is_admin)
        <div class="admin-panel">
          <span class="admin-tag">Panel Admin — Tambah Berita</span>
          <form method="POST" action="{{ route('admin.berita.store') }}" class="form-box" enctype="multipart/form-data">
            @csrf
            <div class="field"><label>Judul</label><input required name="title"></div>
            <div class="field"><label>Isi</label><textarea required name="body"></textarea></div>
            <div class="field"><label>Upload Foto <span style="text-transform:none; opacity:0.6;">(opsional)</span></label><input type="file" name="foto" accept="image/*"></div>
            <div class="field"><label>Atau URL Foto <span style="text-transform:none; opacity:0.6;">(opsional, dipakai kalau gak upload file)</span></label><input name="image" placeholder="https://..."></div>
            <button class="btn btn-primary btn-small" type="submit">Publikasikan</button>
          </form>
        </div>
      @endif
    @endauth
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== PRESTASI ===================== --}}
<section id="prestasi" class="lp-section lp-alt lp-achievements">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h10v4.5a5 5 0 0 1-10 0V4z"/><path d="M7 5.5H4.5a2 2 0 0 0 2.2 4.3"/><path d="M17 5.5h2.5a2 2 0 0 1-2.2 4.3"/><line x1="12" y1="13.5" x2="12" y2="16.5"/><path d="M9 20l1.2-3.5h3.6L15 20H9z"/></svg></span>Rekam Jejak</div>
    <h2 class="title reveal">Prestasi</h2>

    <div class="item-list achievement-list">
      @forelse($prestasi as $p)
        <div class="list-card reveal" style="transition-delay:{{ min($loop->index * 0.06, 0.4) }}s;">
          @if($p->image)
            <img src="{{ $p->image }}" alt="{{ $p->title }}" style="width:120px; height:90px; object-fit:cover; border-radius:2px; flex-shrink:0; border:1px solid rgba(243,239,227,0.1);" onerror="this.style.display='none'">
          @endif
          <div style="flex:1;">
            <h3>{{ $p->title }}</h3>
            <p>{{ $p->deskripsi }}</p>
          </div>
          @auth
            @if(auth()->user()->is_admin)
              <form method="POST" action="{{ route('admin.prestasi.destroy', $p) }}" class="confirm-delete" data-confirm-msg="Hapus prestasi ini?">
                @csrf @method('DELETE')
                <button type="submit" class="btn-danger">Hapus</button>
              </form>
            @endif
          @endauth
        </div>
      @empty
        <div class="empty-state">Belum ada prestasi tercatat.</div>
      @endforelse
    </div>

    @auth
      @if(auth()->user()->is_admin)
        <div class="admin-panel">
          <span class="admin-tag">Panel Admin — Tambah Prestasi</span>
          <form method="POST" action="{{ route('admin.prestasi.store') }}" class="form-box" enctype="multipart/form-data">
            @csrf
            <div class="field"><label>Nama Prestasi</label><input required name="title"></div>
            <div class="field"><label>Keterangan</label><textarea name="deskripsi"></textarea></div>
            <div class="field"><label>Upload Foto <span style="text-transform:none; opacity:0.6;">(opsional)</span></label><input type="file" name="foto" accept="image/*"></div>
            <div class="field"><label>Atau URL Foto <span style="text-transform:none; opacity:0.6;">(opsional, dipakai kalau gak upload file)</span></label><input name="image" placeholder="https://..."></div>
            <button class="btn btn-primary btn-small" type="submit">Simpan</button>
          </form>
        </div>
      @endif
    @endauth
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== GALERI ===================== --}}
<section id="galeri" class="lp-section">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8.5" cy="10.5" r="1.8"/><path d="M3.5 17l5-5 3.5 3.5 2.5-2.5 5.5 5.5"/></svg></span>Dokumentasi</div>
    <h2 class="title reveal">Galeri</h2>

    <div class="gallery-grid">
      <div class="gallery-filters reveal" role="group" aria-label="Filter galeri">
        <button type="button" class="gallery-filter active" data-gallery-filter="all">Semua</button>
        <button type="button" class="gallery-filter" data-gallery-filter="image">Foto</button>
        <button type="button" class="gallery-filter" data-gallery-filter="video">Video</button>
      </div>
      @forelse($galeri as $g)
        <div class="gallery-item reveal" data-gallery-type="{{ $g->type === 'video' ? 'video' : 'image' }}" style="transition-delay:{{ min($loop->index * 0.05, 0.35) }}s;">
          @if($g->type === 'video')
            <video src="{{ $g->url }}" controls preload="metadata"></video>
          @else
            <img src="{{ $g->url }}" alt="{{ $g->caption ?: 'Dokumentasi ekskul voli' }}" loading="lazy" onerror="this.style.opacity=0.15" class="lp-lightbox-trigger" data-full="{{ $g->url }}" data-caption="{{ $g->caption }}">
          @endif
          <div class="cap">
            {{ $g->caption }}
            @auth
              @if(auth()->user()->is_admin)
                <form method="POST" action="{{ route('admin.galeri.destroy', $g) }}" style="display:inline;" class="confirm-delete" data-confirm-msg="Hapus item galeri ini?">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn-danger" style="margin-left:8px; padding:2px 8px;">Hapus</button>
                </form>
              @endif
            @endauth
          </div>
        </div>
      @empty
        <div class="empty-state">Belum ada foto/video di galeri.</div>
      @endforelse
    </div>

    @auth
      @if(auth()->user()->is_admin)
        <div class="admin-panel">
          <span class="admin-tag">Panel Admin — Tambah Foto / Video</span>
          <form method="POST" action="{{ route('admin.galeri.store') }}" class="form-box" enctype="multipart/form-data">
            @csrf
            <div class="field"><label>Upload Foto</label><input type="file" name="foto" accept="image/*"></div>
            <div class="field"><label>Upload Video <span style="text-transform:none; opacity:0.6;">(maks 50MB — mp4/mov/webm)</span></label><input type="file" name="video" accept="video/*"></div>
            <div class="field"><label>Atau URL Foto/Video <span style="text-transform:none; opacity:0.6;">(dipakai kalau gak upload file)</span></label><input name="url" placeholder="https://..."></div>
            <div class="field"><label>Keterangan</label><input name="caption"></div>
            <button class="btn btn-primary btn-small" type="submit">Tambah ke Galeri</button>
          </form>
        </div>
      @endif
    @endauth
  </div>
</section>

{{-- lightbox buat perbesar foto galeri --}}
<div id="lpLightbox" class="lp-lightbox" aria-hidden="true">
  <button type="button" class="lp-lightbox-close" id="lpLightboxClose" aria-label="Tutup">&times;</button>
  <img id="lpLightboxImg" src="" alt="">
  <div id="lpLightboxCaption" class="lp-lightbox-caption"></div>
</div>


<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== AGENDA ===================== --}}
<section id="agenda" class="lp-section lp-alt lp-schedule">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="7"/><line x1="16" y1="3" x2="16" y2="7"/></svg></span>Kegiatan Mendatang</div>
    <h2 class="title reveal">Agenda</h2>

    <div class="item-list schedule-list">
      @forelse($agenda as $a)
        <div class="list-card reveal" data-agenda-date="{{ $a->tanggal->format('Y-m-d') }}T{{ substr($a->jam, 0, 5) }}:00" style="transition-delay:{{ min($loop->index * 0.06, 0.4) }}s;">
          <div style="flex:1;">
            <div class="meta"><span class="agenda-type">{{ str_contains(strtolower($a->title), 'turnamen') ? 'TURNAMEN' : 'LATIHAN' }}</span> {{ $a->tanggal->format('d M Y') }} · {{ substr($a->jam,0,5) }} WIB</div>
            <h3>{{ $a->title }}</h3>
            <p>{{ $a->lokasi }}</p>
            <span class="agenda-countdown" aria-live="polite">Menghitung waktu...</span>
          </div>
          @auth
            @if(auth()->user()->is_admin)
              <form method="POST" action="{{ route('admin.agenda.destroy', $a) }}" class="confirm-delete" data-confirm-msg="Hapus agenda ini?">
                @csrf @method('DELETE')
                <button type="submit" class="btn-danger">Hapus</button>
              </form>
            @endif
          @endauth
        </div>
      @empty
        <div class="empty-state">Belum ada agenda mendatang.</div>
      @endforelse
    </div>

    @auth
      @if(auth()->user()->is_admin)
        <div class="admin-panel">
          <span class="admin-tag">Panel Admin — Tambah Agenda</span>
          <form method="POST" action="{{ route('admin.agenda.store') }}" class="form-box">
            @csrf
            <div class="field"><label>Nama Kegiatan</label><input required name="title"></div>
            <div class="grid-2">
              <div class="field"><label>Tanggal</label><input required type="date" name="tanggal"></div>
              <div class="field"><label>Jam</label><input required type="time" name="jam"></div>
            </div>
            <div class="field"><label>Lokasi</label><input name="lokasi" placeholder="Lapangan voli sekolah"></div>
            <button class="btn btn-primary btn-small" type="submit">Tambah Agenda</button>
          </form>
        </div>
      @endif
    @endauth
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== ANGGOTA ===================== --}}
<section id="anggota" class="lp-section">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="9" cy="8" r="3"/><path d="M3.5 20c0-3.3 2.5-6 5.5-6s5.5 2.7 5.5 6"/><circle cx="17" cy="9" r="2.3"/><path d="M15.5 14.2c2.3.4 4 2.5 4 5.8"/></svg></span>Roster Tim</div>
    <h2 class="title reveal">Anggota</h2>

    <div class="roster-grid reveal">
      @foreach($anggotaAktif as $a)
        <article class="roster-card">
          <div class="roster-avatar">{{ strtoupper(substr($a->nama, 0, 1)) }}</div>
          <div><h3>{{ $a->nama }}</h3><p>{{ $a->kelas }}</p></div>
          <span>{{ $a->posisi }}</span>
        </article>
      @endforeach
    </div>
    @if($anggotaAktif->isEmpty())
      <div class="empty-state">Belum ada anggota aktif.</div>
    @endif

    @auth
      @if(auth()->user()->is_admin)
        <div class="admin-panel">
          <span class="admin-tag">Panel Admin — Pendaftar Masuk</span>
          <table>
            <thead><tr><th>Nama</th><th>Kelas</th><th>No. HP</th><th>Posisi</th><th>Status</th><th></th></tr></thead>
            <tbody>
              @foreach($semuaAnggota as $a)
                <tr>
                  <td>{{ $a->nama }}</td><td>{{ $a->kelas }}</td><td>{{ $a->no_hp }}</td><td>{{ $a->posisi }}</td>
                  <td><span class="status-pill status-{{ $a->status }}">{{ $a->status }}</span></td>
                  <td style="white-space:nowrap;">
                    @if($a->status !== 'aktif')
                      <form method="POST" action="{{ route('admin.anggota.approve', $a) }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-small btn-ghost" style="padding:4px 10px; margin-right:6px;">Terima</button>
                      </form>
                    @endif
                    @if($a->status !== 'ditolak')
                      <form method="POST" action="{{ route('admin.anggota.reject', $a) }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-danger">Tolak</button>
                      </form>
                    @else
                      <form method="POST" action="{{ route('admin.anggota.destroy', $a) }}" style="display:inline;" class="confirm-delete" data-confirm-msg="Hapus permanen data pendaftaran {{ $a->nama }}?">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn-danger">Hapus</button>
                      </form>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          @if($semuaAnggota->isEmpty())
            <div class="empty-state">Belum ada pendaftar.</div>
          @endif
        </div>
      @endif
    @endauth
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== DAFTAR ===================== --}}
<section id="daftar" class="lp-section lp-alt">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="10" cy="8" r="3.3"/><path d="M3.5 20c0-3.7 2.9-6.7 6.5-6.7s6.5 3 6.5 6.7"/><line x1="18.5" y1="8" x2="18.5" y2="13"/><line x1="16" y1="10.5" x2="21" y2="10.5"/></svg></span>Akun Website</div>
    <h2 class="title reveal">Masuk / Buat Akun</h2>

    @auth
      <div class="card reveal" style="max-width:420px;">
        <p style="font-size:0.85rem; color:var(--chalk-dim);">Login sebagai</p>
        <p class="mono" style="color:var(--volley-yellow); margin:4px 0 16px; font-size:0.95rem;">
          {{ auth()->user()->email }} {{ auth()->user()->is_admin ? '· admin' : '' }}
        </p>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-ghost btn-small">Keluar Akun</button>
        </form>
      </div>
    @else
      <div class="card form-box reveal" style="max-width:420px;">
        <div style="display:flex; gap:8px; margin-bottom:18px;">
          <button type="button" class="btn btn-ghost btn-small user-auth-tab active" data-target="loginForm" style="flex:1;">Login</button>
          <button type="button" class="btn btn-ghost btn-small user-auth-tab" data-target="registerForm" style="flex:1;">Buat Akun</button>
        </div>

        <form id="loginForm" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="field"><label>Email</label><input required type="email" name="email" autocomplete="email"></div>
          <div class="field"><label>Password</label><input required type="password" name="password" autocomplete="current-password"></div>
          <button class="btn btn-primary btn-small" type="submit">Login</button>
        </form>

        <form id="registerForm" method="POST" action="{{ route('register') }}" style="display:none;">
          @csrf
          <div class="field"><label>Nama</label><input required name="name"></div>
          <div class="field"><label>Email</label><input required type="email" name="email" autocomplete="email"></div>
          <div class="field"><label>Password</label><input required type="password" name="password" minlength="6" autocomplete="new-password"></div>
          <div class="field"><label>Ulangi Password</label><input required type="password" name="password_confirmation" autocomplete="new-password"></div>
          <button class="btn btn-primary btn-small" type="submit">Buat Akun</button>
        </form>
      </div>
    @endauth

    <div class="kicker reveal" style="margin-top:48px;"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg></span>Gabung Ekskul</div>
    <h2 class="title reveal">Form Pendaftaran</h2>
    <p class="lede">Isi data di bawah buat daftar jadi anggota. Pendaftaran bakal diverifikasi pembina ekskul dulu sebelum masuk roster resmi.</p>
    <form id="registrationForm" method="POST" action="{{ route('anggota.daftar') }}" class="form-box registration-form" style="margin-top:24px;">
      @csrf
      <div class="field"><label>Nama Lengkap</label><input required name="nama"></div>
      <div class="grid-2">
        <div class="field"><label>Kelas</label><input required name="kelas" placeholder="mis. XI RPL 2"></div>
        <div class="field"><label>No. HP / WhatsApp</label><input required name="no_hp" placeholder="08xxxxxxxxxx"></div>
      </div>
      <div class="field">
        <label>Posisi yang Diminati</label>
        <select name="posisi">
          <option>Belum Tahu / Bebas</option>
          <option>Spiker</option>
          <option>Setter</option>
          <option>Libero</option>
          <option>Blocker</option>
        </select>
      </div>
      <p class="form-helper">Data kamu bakal dicek pembina sebelum masuk roster. Pastikan nomor WhatsApp aktif.</p>
      <button class="btn btn-primary" type="submit">Kirim Pendaftaran <span aria-hidden="true">↗</span></button>
    </form>
  </div>
</section>
@endsection
