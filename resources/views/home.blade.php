{{-- resources/views/home.blade.php --}}
@extends('layouts.front')
@section('title','Marra Beauty')

@section('content')
  <section class="hero" id="beranda">
    <div class="container hero__inner">
      <div class="hero__content">
        <span class="eyebrow">Salon &amp; studio kecantikan Bandung</span>
        <h1 class="hero__title">Glow up tanpa kompromi</h1>
        <p class="hero__text">Nikmati layanan nails, lashes, dan perawatan wajah dengan standar higienis, teknisi tersertifikasi, serta pengalaman spa yang hangat dan personal.</p>

        <div class="hero__actions">
          <a class="button button--primary" href="{{ route('pricelist') }}">Lihat menu harga</a>
          <a class="button button--ghost" href="https://wa.me/6282261252011" target="_blank" rel="noopener">Chat admin</a>
        </div>

        <ul class="hero__stats" aria-label="Pencapaian Marra Beauty">
          <li>
            <span class="hero__stats-number">10+</span>
            <span class="hero__stats-label">Teknisi ahli &amp; tersertifikasi</span>
          </li>
          <li>
            <span class="hero__stats-number">4.9★</span>
            <span class="hero__stats-label">Rating rata-rata dari pelanggan</span>
          </li>
          <li>
            <span class="hero__stats-number">7 hari</span>
            <span class="hero__stats-label">Garansi touch up setelah treatment</span>
          </li>
        </ul>
      </div>

      <div class="hero__media">
        <div class="hero__card hero__card--main">
          <img src="{{ asset('hero1.jpg') }}" alt="Ruang treatment bersih dan nyaman" />
        </div>
        <div class="hero__card hero__card--accent">
          <img src="{{ asset('hero2.jpg') }}" alt="Teknisi lashes sedang bekerja" />
          <div class="hero__card-note">
            <strong>98%</strong>
            <span>Klien merasakan peningkatan rasa percaya diri setelah kunjungan pertama.</span>
          </div>
        </div>
        <div class="hero__floating" aria-hidden="true">
          <span class="hero__floating-title">Higienis &amp; aman</span>
          <p>Peralatan steril untuk setiap klien agar treatment selalu nyaman.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section highlight">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Why people love Marra</span>
        <h2 class="section__title">Pengalaman holistik untuk setiap kunjungan</h2>
        <p class="section__subtitle">Kami memastikan setiap treatment berjalan personal, higienis, dan selaras dengan gaya hidup Anda.</p>
      </div>

      <div class="feature-grid">
        <article class="feature-card">
          <div class="feature-card__icon" aria-hidden="true">🧼</div>
          <h3 class="feature-card__title">Sterilisasi menyeluruh</h3>
          <p>Kami menerapkan protokol higienis kelas salon premium untuk tiap sesi.</p>
        </article>
        <article class="feature-card">
          <div class="feature-card__icon" aria-hidden="true">🎨</div>
          <h3 class="feature-card__title">Tren terbaru</h3>
          <p>Teknisi selalu update trend nails &amp; lashes sehingga gaya Anda tetap kekinian.</p>
        </article>
        <article class="feature-card">
          <div class="feature-card__icon" aria-hidden="true">🤝</div>
          <h3 class="feature-card__title">Pendampingan personal</h3>
          <p>Konsultasi santai sebelum treatment agar hasil sesuai keinginan.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section signature">
    <div class="container signature__inner">
      <div class="signature__media">
        <div class="signature__photo signature__photo--primary">
          <img src="{{ asset('benefit-left.jpg') }}" alt="Produk treatment premium" />
        </div>
        <div class="signature__photo signature__photo--secondary">
          <img src="{{ asset('benefit-right.jpg') }}" alt="Teknisi berpengalaman" />
          <div class="signature__badge">Premium Room</div>
        </div>
      </div>
      <div class="signature__content">
        <span class="eyebrow">Signature experience</span>
        <h2 class="section__title">Setiap detail kami kurasi dengan sepenuh hati</h2>
        <p>Kami percaya kecantikan terbaik hadir dari pengalaman yang hangat. Mulai dari ambience studio, musik, hingga aroma, semua dirancang untuk membuat Anda merasa rileks sejak pertama melangkah.</p>
        <ul class="checklist">
          <li>Teknisi bersertifikat &amp; terlatih secara berkala</li>
          <li>Produk orisinal yang lembut untuk kulit Indonesia</li>
          <li>Ruang perawatan eksklusif dengan kursi super nyaman</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section section--muted">
    <div class="container">
      <div class="section__header">
        <span class="eyebrow">Pilihan favorit</span>
        <h2 class="section__title">Layanan pilihan kami</h2>
        <p class="section__subtitle">Pilih layanan yang paling cocok untuk kebutuhan Anda hari ini.</p>
      </div>

      <div class="carousel" id="serviceCarousel">
        @foreach (['massage','haircare','steam','styling','color','treatment','spa'] as $service)
          <article class="service-card">
            <img src="{{ asset('prod-'.$service.'.jpg') }}" alt="Perawatan {{ ucfirst($service) }}" />
            <div class="service-card__body">
              <span class="service-card__tag">Layanan</span>
              <h3 class="service-card__title">{{ ucfirst($service) }}</h3>
              <p>Buat tampilan Anda semakin menawan dengan sesi {{ strtolower(str_replace('-', ' ', $service)) }} yang personal.</p>
            </div>
          </article>
        @endforeach
      </div>

      <div class="carousel__controls">
        <button class="carousel__button" data-direction="prev" data-target="serviceCarousel" aria-label="Geser layanan sebelumnya">‹</button>
        <button class="carousel__button" data-direction="next" data-target="serviceCarousel" aria-label="Geser layanan berikutnya">›</button>
      </div>
    </div>
  </section>

  <section class="section locations">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Two strategic studios</span>
        <h2 class="section__title">Kunjungi cabang terdekat Anda</h2>
        <p class="section__subtitle">Reservasi terlebih dahulu agar kami dapat menyiapkan pengalaman terbaik.</p>
      </div>

      <div class="location-grid">
        <figure class="location-hero">
          <img src="{{ asset('loc-promo.jpg') }}" alt="Informasi jam operasional Marra Beauty" />
          <figcaption class="location-hero__caption">
            <span>BUKA SETIAP HARI</span>
            <strong>10.00 – 19.00 WIB</strong>
          </figcaption>
        </figure>
        <div class="location-list">
          <article class="location-item">
            <h3 class="location-item__title">Marra Beauty Studio — Bengawan</h3>
            <p class="location-item__desc">Jl. Bengawan No.45, Cihapit, Kec. Bandung Wetan,<br>Kota Bandung, Jawa Barat 40114</p>
            <a class="location-item__contact" href="tel:083838352801">0838-3835-2801</a>
          </article>
          <article class="location-item">
            <h3 class="location-item__title">Marra Beauty Studio — Dago</h3>
            <p class="location-item__desc">Jl. Ciungwanara No.10A, Lb. Siliwangi, Kec. Coblong,<br>Kota Bandung, Jawa Barat 40135</p>
            <a class="location-item__contact" href="tel:082261252011">0822-6125-2011</a>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section cta">
    <div class="container cta__inner">
      <div class="cta__copy">
        <h2 class="section__title">Siap tampil percaya diri?</h2>
        <p class="section__subtitle">Booking jadwal favorit Anda sebelum penuh dan rasakan sendiri pelayanan personal dari Marra Beauty.</p>
      </div>
      <a class="button button--primary" href="https://wa.me/6282261252011" target="_blank" rel="noopener">Buat janji sekarang</a>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  (() => {
    const buttons = document.querySelectorAll('.carousel__button');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const target = document.getElementById(button.dataset.target || '');
        if (!target) return;
        const direction = button.dataset.direction === 'next' ? 1 : -1;
        const distance = Math.round(target.clientWidth * 0.8);
        target.scrollBy({ left: distance * direction, behavior: 'smooth' });
      });
    });
  })();
</script>
@endsection
