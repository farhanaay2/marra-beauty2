@extends('layouts.front')
@section('title','Lokasi Marra Beauty')

@section('content')
  <section class="section locations">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Temukan kami</span>
        <h1 class="section__title">Lokasi studio Marra Beauty</h1>
        <p class="section__subtitle">Dua cabang strategis di Bandung untuk memudahkan Anda. Parkir luas dan mudah diakses kendaraan roda dua maupun empat.</p>
      </div>

      <div class="location-grid">
        <figure class="location-hero">
          <img src="{{ asset('loc-promo.jpg') }}" alt="Suasana studio Marra Beauty" />
          <figcaption class="location-hero__caption">
            <span>BUKA SETIAP HARI</span>
            <strong>10.00 – 19.00 WIB</strong>
          </figcaption>
        </figure>
        <div class="location-list">
          <article class="location-item">
            <h3 class="location-item__title">Marra Beauty Studio — Bengawan</h3>
            <p class="location-item__desc">Jl. Bengawan No.45, Cihapit, Kec. Bandung Wetan,<br>Kota Bandung, Jawa Barat 40114</p>
            <a class="location-item__contact" href="https://maps.google.com/?q=Marra+Beauty+Studio+Bengawan" target="_blank" rel="noopener">Lihat di Google Maps</a>
          </article>
          <article class="location-item">
            <h3 class="location-item__title">Marra Beauty Studio — Dago</h3>
            <p class="location-item__desc">Jl. Ciungwanara No.10A, Lb. Siliwangi, Kec. Coblong,<br>Kota Bandung, Jawa Barat 40135</p>
            <a class="location-item__contact" href="https://maps.google.com/?q=Marra+Beauty+Studio+Dago" target="_blank" rel="noopener">Lihat di Google Maps</a>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection
