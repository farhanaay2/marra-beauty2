@extends('layouts.front')
@section('title','Menu Harga & Kontak')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Informasi layanan</span>
        <h1 class="section__title">Menu harga &amp; reservasi</h1>
        <p class="section__subtitle">Harga dapat berbeda sesuai tingkat kesulitan desain. Silakan hubungi admin untuk daftar harga terperinci dan paket terbaru.</p>
      </div>

      <div class="tile-grid tile-grid--narrow">
        <article class="tile">
          <h3 class="tile__title">Cara reservasi</h3>
          <ul class="tile__list">
            <li>Hubungi admin via WhatsApp untuk pengecekan slot.</li>
            <li>Lakukan pembayaran DP minimal 100K untuk mengamankan jadwal.</li>
            <li>Datang tepat waktu agar sesi berjalan nyaman dan maksimal.</li>
          </ul>
        </article>

        <article class="tile">
          <h3 class="tile__title">Metode pembayaran</h3>
          <ul class="tile__list">
            <li>Transfer bank (BCA / BRI / Mandiri).</li>
            <li>E-wallet: OVO, GoPay, Dana, dan ShopeePay.</li>
            <li>Tunai di lokasi studio.</li>
          </ul>
        </article>

        <article class="tile">
          <h3 class="tile__title">Catatan penting</h3>
          <ul class="tile__list">
            <li>Harga belum termasuk pajak &amp; add-ons tertentu.</li>
            <li>Silakan konfirmasi ulang jika ingin reschedule minimal H-1.</li>
            <li>Garansi touch up 7 hari hanya berlaku untuk perawatan lashes &amp; lips.</li>
          </ul>
        </article>
      </div>

      <div class="cta__inner cta__inner--compact">
        <div class="cta__copy">
          <h2 class="section__title">Butuh daftar harga lengkap?</h2>
          <p class="section__subtitle">Tim admin siap membantu dengan katalog harga terbaru dan promo yang sedang berjalan.</p>
        </div>
        <a class="button button--primary" href="https://wa.me/6282261252011" target="_blank" rel="noopener">Chat Admin</a>
      </div>
    </div>
  </section>
@endsection
