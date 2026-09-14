@extends('layouts.app')

@section('content')

{{-- ===================== HERO / BERANDA ===================== --}}
<section id="beranda" class="lp-hero">
  <div class="wrap lp-hero-grid">
    <div>
      <div class="lp-badge reveal"><span class="lp-icon" style="width:14px; height:14px; display:inline-block; vertical-align:-2px; margin-right:4px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"/></svg></span>Pendaftaran Anggota Baru 2026/2027</div>
      <h1 class="lp-hero-title reveal" style="transition-delay:.08s;">EKSTRAKURIKULER<br>BOLA VOLI<br><span>SMKN 2 PURWAKARTA</span></h1>
      <p class="lede reveal" style="margin-top:18px; transition-delay:.16s;">Asah teknik. Bangun kekompakan tim. Bawa nama sekolah. Gabung bersama siswa lain yang punya minat sama di lapangan voli.</p>
      <div class="reveal" style="margin-top:28px; display:flex; gap:12px; flex-wrap:wrap; transition-delay:.24s;">
        <a href="#daftar" class="btn btn-primary">Gabung Sekarang</a>
        <a href="#agenda" class="btn btn-ghost">Jadwal Latihan</a>
        <a href="#anggota" class="btn btn-ghost">Lihat Anggota</a>
      </div>
    </div>
    <div class="lp-hero-visual reveal" style="transition-delay:.2s;">
      <svg viewBox="0 0 400 320" xmlns="http://www.w3.org/2000/svg">
        <rect width="400" height="320" rx="12" fill="#0C1830"/>
        <rect x="30" y="60" width="340" height="200" fill="none" stroke="#C6873F" stroke-width="4"/>
        <line x1="200" y1="30" x2="200" y2="290" stroke="#F0B429" stroke-width="4"/>
        <circle cx="140" cy="160" r="16" fill="#F3EFE3"/>
        <circle cx="260" cy="160" r="16" fill="#3D6E9E"/>
      </svg>
      <div class="lp-hero-tag">Pusat Pembinaan Atlet Voli Sekolah</div>
    </div>
  </div>
</section>

<div class="net-divider" aria-hidden="true"><svg viewBox="0 0 1200 46" preserveAspectRatio="none"><line x1="0" y1="2" x2="1200" y2="2" stroke="#C6873F" stroke-width="2"/><line x1="0" y1="44" x2="1200" y2="44" stroke="#C6873F" stroke-width="2"/></svg></div>

{{-- ===================== PROFIL ===================== --}}
<section id="profil" class="lp-section">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 21V4a1 1 0 0 1 1-1h9l3 3h3v9h-9l-3-3H6"/></svg></span>Bab I — Latar Belakang</div>
    <h2 class="title reveal">Profil Organisasi</h2>
    <div class="grid-2">
      <p class="lede" style="max-width:none;">
        Olahraga bukan cuma soal fisik — ini soal karakter. Bola voli ngajarin kerja sama tim, kedisiplinan,
        dan sportivitas dengan cara yang gak bisa didapet dari kelas biasa. Banyak siswa suka main voli,
        tapi sampai sekarang belum ada wadah resminya di sekolah. Ekskul ini dibentuk buat ngisi celah itu:
        tempat siswa nyalurin minat dan bakat di bidang olahraga secara terstruktur, sekaligus nyiapin tim
        sekolah buat ikut kejuaraan dan turnamen antarsekolah.
      </p>
      <div class="item-list">
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
<section id="berita" class="lp-section">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="14" height="15" rx="1"/><path d="M17 9h3a1 1 0 0 1 1 1v8a2 2 0 0 1-2 2H6"/><line x1="6.5" y1="9" x2="13.5" y2="9"/><line x1="6.5" y1="12.5" x2="13.5" y2="12.5"/><line x1="6.5" y1="16" x2="10.5" y2="16"/></svg></span>Info Ekskul</div>
    <h2 class="title reveal">Berita</h2>

    <div class="item-list">
      @forelse($berita as $b)
        <div class="list-card reveal" style="transition-delay:{{ min($loop->index * 0.06, 0.4) }}s;">
          @if($b->image)
            <img src="{{ $b->image }}" alt="{{ $b->title }}" style="width:120px; height:90px; object-fit:cover; border-radius:2px; flex-shrink:0; border:1px solid rgba(243,239,227,0.1);" onerror="this.style.display='none'">
          @endif
          <div style="flex:1;">
            <div class="meta">{{ $b->tanggal->format('Y-m-d') }}</div>
            <h3>{{ $b->title }}</h3>
            <p>{{ $b->body }}</p>
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
<section id="prestasi" class="lp-section lp-alt">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h10v4.5a5 5 0 0 1-10 0V4z"/><path d="M7 5.5H4.5a2 2 0 0 0 2.2 4.3"/><path d="M17 5.5h2.5a2 2 0 0 1-2.2 4.3"/><line x1="12" y1="13.5" x2="12" y2="16.5"/><path d="M9 20l1.2-3.5h3.6L15 20H9z"/></svg></span>Rekam Jejak</div>
    <h2 class="title reveal">Prestasi</h2>

    <div class="item-list">
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
      @forelse($galeri as $g)
        <div class="gallery-item reveal" style="transition-delay:{{ min($loop->index * 0.05, 0.35) }}s;">
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
<section id="agenda" class="lp-section lp-alt">
  <div class="wrap">
    <div class="kicker reveal"><span class="lp-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><rect x="3" y="5" width="18" height="16" rx="2"/><line x1="3" y1="10" x2="21" y2="10"/><line x1="8" y1="3" x2="8" y2="7"/><line x1="16" y1="3" x2="16" y2="7"/></svg></span>Kegiatan Mendatang</div>
    <h2 class="title reveal">Agenda</h2>

    <div class="item-list">
      @forelse($agenda as $a)
        <div class="list-card reveal" style="transition-delay:{{ min($loop->index * 0.06, 0.4) }}s;">
          <div style="flex:1;">
            <div class="meta">{{ $a->tanggal->format('Y-m-d') }} · {{ substr($a->jam,0,5) }} WIB</div>
            <h3>{{ $a->title }}</h3>
            <p>{{ $a->lokasi }}</p>
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

    <table class="reveal">
      <thead><tr><th>Nama</th><th>Kelas</th><th>Posisi</th></tr></thead>
      <tbody>
        @foreach($anggotaAktif as $a)
          <tr><td>{{ $a->nama }}</td><td>{{ $a->kelas }}</td><td>{{ $a->posisi }}</td></tr>
        @endforeach
      </tbody>
    </table>
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
    <form method="POST" action="{{ route('anggota.daftar') }}" class="form-box" style="margin-top:24px;">
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
      <button class="btn btn-primary" type="submit">Kirim Pendaftaran</button>
    </form>
  </div>
</section>
@endsection
