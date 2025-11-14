@extends('layouts.front')
@section('title','Kontak Marra Beauty')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Hubungi kami</span>
        <h1 class="section__title">Butuh bantuan? Kami siap menjawab</h1>
        <p class="section__subtitle">Silakan pilih kanal komunikasi yang paling nyaman untuk Anda. Tim admin kami responsif setiap hari.</p>
      </div>

      <div class="tile-grid tile-grid--narrow">
        <article class="tile">
          <h3 class="tile__title">Reservasi &amp; konsultasi</h3>
          <ul class="tile__list">
            <li>WhatsApp: <a href="https://wa.me/6282261252011" target="_blank" rel="noopener">0822-6125-2011</a></li>
            <li>Telepon studio Bengawan: <a href="tel:083838352801">0838-3835-2801</a></li>
            <li>Telepon studio Dago: <a href="tel:082261252011">0822-6125-2011</a></li>
          </ul>
        </article>

        <article class="tile">
          <h3 class="tile__title">Jam operasional admin</h3>
          <p class="tile__desc">Admin siap membantu setiap hari pukul 09.00 – 19.00 WIB. Jika pesan Anda dikirim di luar jam operasional, kami akan membalas pada hari berikutnya.</p>
        </article>

        <article class="tile">
          <h3 class="tile__title">Media sosial</h3>
          <p class="tile__desc">Ikuti kami di <a href="https://www.instagram.com/marrabeauty.id" target="_blank" rel="noopener">Instagram</a> untuk update promo dan portofolio terbaru.</p>
        </article>
      </div>

      <div class="cta__inner cta__inner--compact">
        <div class="cta__copy">
          <h2 class="section__title">Ingin konsultasi desain?</h2>
          <p class="section__subtitle">Kirimkan foto inspirasi Anda melalui WhatsApp dan kami akan bantu rekomendasikan treatment terbaik.</p>
        </div>
        <a class="button button--primary" href="https://wa.me/6282261252011" target="_blank" rel="noopener">Chat sekarang</a>
      </div>
    </div>
  </section>
@endsection
