// ---------- intro splash screen ----------
(function(){
  const intro = document.getElementById('introOverlay');
  if(!intro) return;

  const seenIntro = sessionStorage.getItem('voliIntroSeen') === '1';
  if(seenIntro){
    intro.remove();
    document.body.classList.remove('intro-active');
    return;
  }

  document.body.classList.add('intro-active');
  window.setTimeout(() => {
    intro.classList.add('hidden');
    document.body.classList.remove('intro-active');
    sessionStorage.setItem('voliIntroSeen', '1');
  }, 2200);
})();

// ---------- toast notifikasi (dipanggil dari layout blade lewat session flash) ----------
function showToast(msg, type){
  type = type || 'ok';
  const stack = document.getElementById('toastStack');
  if(!stack) return;
  const el = document.createElement('div');
  el.className = 'toast ' + type;
  el.textContent = msg;
  stack.appendChild(el);
  setTimeout(() => {
    el.style.transition = 'opacity .3s';
    el.style.opacity = '0';
    setTimeout(() => el.remove(), 300);
  }, 3200);
}

// ---------- toggle tab Login / Buat Akun di halaman Daftar ----------
document.querySelectorAll('.user-auth-tab').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.user-auth-tab').forEach(b => {
      const active = b === btn;
      b.classList.toggle('active', active);
      b.style.background = active ? 'var(--volley-yellow)' : 'none';
      b.style.color = active ? 'var(--court-navy)' : 'var(--chalk)';
    });
    document.getElementById('loginForm').style.display = btn.dataset.target === 'loginForm' ? 'block' : 'none';
    document.getElementById('registerForm').style.display = btn.dataset.target === 'registerForm' ? 'block' : 'none';
  });
});
const firstAuthTab = document.querySelector('.user-auth-tab.active');
if(firstAuthTab){ firstAuthTab.style.background = 'var(--volley-yellow)'; firstAuthTab.style.color = 'var(--court-navy)'; }

// ---------- hamburger menu (mobile) ----------
const hamburgerBtn = document.getElementById('hamburgerBtn');
const tabsWrapEl = document.getElementById('tabsWrap');
if(hamburgerBtn && tabsWrapEl){
  hamburgerBtn.addEventListener('click', () => {
    const isOpen = tabsWrapEl.classList.toggle('mobile-open');
    hamburgerBtn.classList.toggle('open', isOpen);
    hamburgerBtn.setAttribute('aria-expanded', String(isOpen));
  });
}
// Landing page satu halaman: klik menu = anchor-scroll, bukan pindah halaman.
// Tutup dropdown hamburger otomatis begitu salah satu menu diklik (khusus mobile).
document.querySelectorAll('.tab-btn').forEach(link => {
  link.addEventListener('click', () => {
    if(tabsWrapEl && tabsWrapEl.classList.contains('mobile-open')){
      tabsWrapEl.classList.remove('mobile-open');
      hamburgerBtn.classList.remove('open');
      hamburgerBtn.setAttribute('aria-expanded', 'false');
    }
  });
});

// ---------- filter galeri ----------
document.querySelectorAll('[data-gallery-filter]').forEach(button => {
  button.addEventListener('click', () => {
    const filter = button.dataset.galleryFilter;
    document.querySelectorAll('[data-gallery-filter]').forEach(item => item.classList.toggle('active', item === button));
    document.querySelectorAll('[data-gallery-type]').forEach(item => {
      item.classList.toggle('is-filtered', filter !== 'all' && item.dataset.galleryType !== filter);
    });
  });
});

// ---------- scroll-spy: nav otomatis nge-highlight section yang lagi keliatan ----------
const lpSections = document.querySelectorAll('section[id]');
const lpNavLinks = document.querySelectorAll('.tab-btn');
if(lpSections.length && lpNavLinks.length){
  const spy = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        lpNavLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + entry.target.id));
      }
    });
  }, { rootMargin: '-40% 0px -55% 0px' });
  lpSections.forEach(sec => spy.observe(sec));
}

// ---------- trigger rahasia: ketik "admin" di keyboard buat buka modal login admin ----------
let secretBuffer = '';
document.addEventListener('keydown', e => {
  const tag = (e.target.tagName || '').toLowerCase();
  if(tag === 'input' || tag === 'textarea' || tag === 'select') return;
  if(e.key.length !== 1) return;
  secretBuffer = (secretBuffer + e.key.toLowerCase()).slice(-5);
  if(secretBuffer === 'admin'){
    const overlay = document.getElementById('loginAdminOverlay');
    if(overlay) overlay.style.display = 'flex';
    secretBuffer = '';
  }
});

// ---------- lightbox galeri (klik foto buat diperbesar) ----------
const lpLightbox = document.getElementById('lpLightbox');
const lpLightboxImg = document.getElementById('lpLightboxImg');
const lpLightboxCaption = document.getElementById('lpLightboxCaption');
const lpLightboxClose = document.getElementById('lpLightboxClose');

if(lpLightbox){
  document.querySelectorAll('.lp-lightbox-trigger').forEach(img => {
    img.addEventListener('click', () => {
      lpLightboxImg.src = img.dataset.full || img.src;
      lpLightboxCaption.textContent = img.dataset.caption || '';
      lpLightbox.classList.add('open');
    });
  });
  function closeLpLightbox(){
    lpLightbox.classList.remove('open');
    lpLightboxImg.src = '';
  }
  lpLightboxClose.addEventListener('click', closeLpLightbox);
  lpLightbox.addEventListener('click', e => { if(e.target === lpLightbox) closeLpLightbox(); });
  document.addEventListener('keydown', e => { if(e.key === 'Escape') closeLpLightbox(); });
}

// ---------- modal konfirmasi hapus custom (ganti confirm() bawaan browser) ----------
(function(){
  const overlay = document.getElementById('confirmOverlay');
  const msgEl = document.getElementById('confirmMessage');
  const okBtn = document.getElementById('confirmOkBtn');
  const cancelBtn = document.getElementById('confirmCancelBtn');
  if(!overlay) return;

  let pendingForm = null;

  document.querySelectorAll('form.confirm-delete').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      pendingForm = form;
      msgEl.textContent = form.dataset.confirmMsg || 'Yakin mau lanjut?';
      overlay.classList.add('open');
    });
  });

  function closeConfirm(){
    overlay.classList.remove('open');
    pendingForm = null;
  }
  okBtn.addEventListener('click', () => {
    if(pendingForm) pendingForm.submit();
    closeConfirm();
  });
  cancelBtn.addEventListener('click', closeConfirm);
  overlay.addEventListener('click', e => { if(e.target === overlay) closeConfirm(); });
  document.addEventListener('keydown', e => { if(e.key === 'Escape' && overlay.classList.contains('open')) closeConfirm(); });
})();

// ---------- scroll-reveal: elemen muncul pelan-pelan (fade + slide up) pas discroll ----------
(function(){
  const revealEls = document.querySelectorAll('.reveal');
  if(!revealEls.length) return;

  if(!('IntersectionObserver' in window)){
    revealEls.forEach(el => el.classList.add('is-visible'));
    return;
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target); // sekali muncul, gak usah diulang tiap scroll
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

  revealEls.forEach(el => observer.observe(el));
})();

// ---------- angka hero: naik singkat saat statistik masuk viewport ----------
(function(){
  const counters = document.querySelectorAll('[data-count]');
  if(!counters.length) return;

  const animateCounter = el => {
    const target = Number(el.dataset.count || 0);
    if(!target){ el.textContent = '0'; return; }
    const startedAt = performance.now();
    const duration = 700;
    const tick = now => {
      const progress = Math.min((now - startedAt) / duration, 1);
      el.textContent = String(Math.round(target * (1 - Math.pow(1 - progress, 3))));
      if(progress < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  };

  if(!('IntersectionObserver' in window)){
    counters.forEach(el => { el.textContent = el.dataset.count || '0'; });
    return;
  }

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        animateCounter(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold:0.8 });
  counters.forEach(counter => observer.observe(counter));
})();

// ---------- countdown agenda terdekat ----------
(function(){
  const agendaItems = document.querySelectorAll('[data-agenda-date]');
  if(!agendaItems.length) return;

  const updateCountdowns = () => {
    agendaItems.forEach(item => {
      const target = new Date(item.dataset.agendaDate).getTime();
      const output = item.querySelector('.agenda-countdown');
      if(!output || Number.isNaN(target)) return;
      const distance = target - Date.now();
      if(distance <= 0){ output.textContent = 'Sedang berlangsung / sudah lewat'; return; }
      const days = Math.floor(distance / 86400000);
      const hours = Math.floor((distance % 86400000) / 3600000);
      output.textContent = days ? `${days} hari lagi` : `${hours} jam lagi`;
    });
  };
  updateCountdowns();
  window.setInterval(updateCountdowns, 60000);
})();

// ---------- feedback submit form pendaftaran ----------
(function(){
  const form = document.getElementById('registrationForm');
  if(!form) return;
  form.addEventListener('submit', () => {
    form.classList.add('is-submitting');
    const button = form.querySelector('button[type="submit"]');
    if(button) button.innerHTML = 'Mengirim...';
  });
})();
