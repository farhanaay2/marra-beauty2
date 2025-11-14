{{-- resources/views/home.blade.php --}}
@extends('layouts.front')
@section('title','Marra Beauty')

@section('content')

  {{-- ========= HERO SLIDER ========= --}}
  <section class="hero-slider" id="hero" aria-label="Highlight">
    <div class="slides">
      {{-- Slide 1 --}}
      <div class="slide is-active">
        <img src="{{ asset('hero1.jpg') }}" alt="Ruang layanan bersih dan higienis">
        <div class="slide__overlay">
          <div class="badge-round">STAY<br>SAFE &<br>HEALTHY</div>
          <div class="pill">Pastikan Anda</div>
          <div class="pill pill--dark">
            <strong>MERASAKAN</strong>
            <span>Layanan Terbaik Kami</span>
          </div>
        </div>
      </div>

      {{-- Slide 2 --}}
      <div class="slide">
        <img src="{{ asset('hero2.jpg') }}" alt="Hasil natural rapi">
        <div class="slide__overlay">
          <div class="badge-round">NATURAL<br>LOOK</div>
          <div class="pill">Hasil Rapi & Nyaman</div>
          <div class="pill pill--dark">
            <strong>TEKNISI</strong>
            <span>Berpengalaman</span>
          </div>
        </div>
      </div>

      {{-- Slide 3 --}}
      <div class="slide">
        <img src="{{ asset('hero3.jpg') }}" alt="Harga bersahabat transparan">
        <div class="slide__overlay">
          <div class="badge-round">BEST<br>PRICE</div>
          <div class="pill">Harga Bersahabat</div>
          <div class="pill pill--dark">
            <strong>TRANSPARAN</strong>
            <span>Tanpa Taktik</span>
          </div>
        </div>
      </div>
    </div>

    <button class="nav prev" id="prevSlide" aria-label="Slide sebelumnya">‹</button>
    <button class="nav next" id="nextSlide" aria-label="Slide berikutnya">›</button>
  </section>

  {{-- ========= TAGLINE ========= --}}
  <section class="intro wrap">
    <h2 class="title">Salon Wanita & Pria Terpopuler di Bandung</h2>
    <p class="subtitle">Melayani sepenuh hati dengan teknisi profesional & fasilitas higienis.</p>
  </section>

  {{-- ========= KEUNGGULAN ========= --}}
  <section class="benefits wrap" aria-label="Keunggulan">
    <figure class="benefits__media">
      <img src="{{ asset('benefit-left.jpg') }}" alt="Produk dan alat higienis">
    </figure>

    <ul class="benefits__list">
      <li>
        <div class="ic" aria-hidden="true">🧴</div>
        <div>
          <h4>Up To Date</h4>
          <p>Selalu update trend & teknik terbaru.</p>
        </div>
      </li>
      <li>
        <div class="ic" aria-hidden="true">💰</div>
        <div>
          <h4>Best Price</h4>
          <p>Harga terbaik & terjangkau untuk semua.</p>
        </div>
      </li>
      <li>
        <div class="ic" aria-hidden="true">🤝</div>
        <div>
          <h4>Service Excellent</h4>
          <p>Ramah, cepat, dan memuaskan.</p>
        </div>
      </li>
    </ul>

    <figure class="benefits__media">
      <img src="{{ asset('benefit-right.jpg') }}" alt="Teknisi berpengalaman">
    </figure>
  </section>

  {{-- ========= PRODUK / LAYANAN ========= --}}
  <section class="products" aria-label="Produk dan Layanan">
    <div class="wrap">
      <h2 class="title">Produk Perawatan Marra</h2>
      <p class="subtitle">Layanan Rambut, Wajah, & Tubuh</p>

      <div class="scroller" id="prodScroll">
        @foreach (['massage','haircare','steam','styling','color','treatment','spa'] as $p)
          <a class="card" href="#" aria-label="Produk {{ ucfirst($p) }}">
            <img src="{{ asset('prod-'.$p.'.jpg') }}" alt="Perawatan {{ ucfirst($p) }}">
            <div class="card__caption">{{ ucfirst($p) }}</div>
          </a>
        @endforeach
      </div>

      <div class="scroller__nav">
        <button class="scroll prev" data-target="prodScroll" aria-label="Geser kiri">‹</button>
        <button class="scroll next" data-target="prodScroll" aria-label="Geser kanan">›</button>
      </div>
    </div>
  </section>

  {{-- ========= LOKASI ========= --}}
  <section class="locations wrap" aria-label="Lokasi Cabang">
    <h2 class="title">Cabang Marra</h2>
    <p class="subtitle">2 Cabang — Disarankan <strong>Reservasi</strong> terlebih dahulu</p>

    <div class="locations__grid">
      <figure class="loc__media">
        <img src="{{ asset('loc-promo.jpg') }}" alt="Informasi jam buka">
        <figcaption class="bubble">
          <b>BUKA SETIAP HARI</b><br>
          10.00 – 19.00 WIB
        </figcaption>
      </figure>

      <ul class="loc__list">
        <li>
          <div class="loc-title">
            <span class="loc-icon" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#b56a7a">
                <path d="M12 2a7 7 0 0 0-7 7c0 5.3 5.4 11.5 6.7 13a.6.6 0 0 0 .8 0C13.9 20.5 19 14.3 19 9a7 7 0 0 0-7-7Zm0 9.9A2.9 2.9 0 1 1 12 6a2.9 2.9 0 0 1 0 5.9Z"/>
              </svg>
            </span>
            <b>Marra Beauty Studio — Bengawan</b>
          </div>
          <p>Jl. Bengawan No.45, Cihapit, Kec. Bandung Wetan,<br>
             Kota Bandung, Jawa Barat 40114</p>
          <p class="phone">Tlp. 0838–3835–2801</p>
        </li>

        <li>
          <div class="loc-title">
            <span class="loc-icon" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#b56a7a">
                <path d="M12 2a7 7 0 0 0-7 7c0 5.3 5.4 11.5 6.7 13a.6.6 0 0 0 .8 0C13.9 20.5 19 14.3 19 9a7 7 0 0 0-7-7Zm0 9.9A2.9 2.9 0 1 1 12 6a2.9 2.9 0 0 1 0 5.9Z"/>
              </svg>
            </span>
            <b>Marra Beauty Studio — Dago</b>
          </div>
          <p>Jl. Ciungwanara No.10A, Lb. Siliwangi, Kec. Coblong,<br>
             Kota Bandung, Jawa Barat 40135</p>
          <p class="phone">Tlp. 0822–6125–2011</p>
        </li>
      </ul>
    </div>
  </section>

@endsection


@push('scripts')
<script>
/* =========================
   HERO SLIDER (autoplay + nav)
   ========================= */
(function(){
  const slides = Array.from(document.querySelectorAll('.hero-slider .slide'));
  if (!slides.length) return;
  let i = slides.findIndex(s => s.classList.contains('is-active'));
  if (i < 0) i = 0;

  const show = idx => {
    slides.forEach(s => s.classList.remove('is-active'));
    slides[idx].classList.add('is-active');
  };

  document.getElementById('nextSlide')?.addEventListener('click', () => {
    i = (i + 1) % slides.length; show(i);
  });
  document.getElementById('prevSlide')?.addEventListener('click', () => {
    i = (i - 1 + slides.length) % slides.length; show(i);
  });

  // Autoplay (6 detik)
  setInterval(() => { i = (i + 1) % slides.length; show(i); }, 6000);
})();

/* =========================
   HORIZONTAL SCROLLER
   ========================= */
(function(){
  document.querySelectorAll('.scroll').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.getAttribute('data-target');
      const el = document.getElementById(id);
      if (!el) return;
      const delta = Math.round(el.clientWidth * 0.85);
      el.scrollBy({ left: btn.classList.contains('next') ? delta : -delta, behavior: 'smooth' });
    });
  });
})();
</script>
@endpush
