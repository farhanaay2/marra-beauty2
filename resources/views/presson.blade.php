@extends('layouts.front')
@section('title','Press On Nails')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Custom design</span>
        <h1 class="section__title">Press on nails siap pakai</h1>
        <p class="section__subtitle">Tersedia berbagai ukuran dengan desain eksklusif yang bisa disesuaikan dengan kepribadian Anda.</p>
      </div>

      <div class="tile-grid">
        <article class="tile" id="basic">
          <h3 class="tile__title">Basic Set</h3>
          <p class="tile__desc">Pilihan warna solid dan minimalis untuk tampilan sehari-hari.</p>
        </article>

        <article class="tile" id="premium">
          <h3 class="tile__title">Premium Set</h3>
          <p class="tile__desc">Didesain dengan kombinasi glitter, chrome, dan aksen elegan.</p>
        </article>

        <article class="tile" id="custom">
          <h3 class="tile__title">Custom Design</h3>
          <p class="tile__desc">Konsultasikan desain impian Anda bersama nail artist kami.</p>
        </article>
      </div>
    </div>
  </section>
@endsection
