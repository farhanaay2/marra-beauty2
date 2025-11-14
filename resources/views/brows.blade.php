@extends('layouts.front')
@section('title','Brows')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Perawatan alis</span>
        <h1 class="section__title">Brows yang rapi &amp; presisi</h1>
        <p class="section__subtitle">Treatment alis dengan hasil natural untuk bentuk wajah Anda. Konsultasi gratis sebelum tindakan.</p>
      </div>

      <div class="tile-grid tile-grid--narrow">
        <article class="tile" id="shape">
          <h3 class="tile__title">Brow Shaping</h3>
          <p class="tile__desc">Merapikan bentuk alis agar simetris dan sesuai karakter wajah.</p>
        </article>

        <article class="tile" id="lamination">
          <h3 class="tile__title">Brow Lamination</h3>
          <p class="tile__desc">Membuat tampilan alis lebih tebal, lembut, dan mudah diatur sepanjang hari.</p>
        </article>

        <article class="tile" id="bomber">
          <h3 class="tile__title">Brow Bomber</h3>
          <p class="tile__desc">Perawatan premium untuk alis yang sehat, fluffy, dan awet hingga berminggu-minggu.</p>
        </article>
      </div>
    </div>
  </section>
@endsection
