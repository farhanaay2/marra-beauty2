@extends('layouts.front')
@section('title','Waxing')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Body treatment</span>
        <h1 class="section__title">Waxing higienis &amp; nyaman</h1>
        <p class="section__subtitle">Kami menggunakan wax berkualitas tinggi untuk hasil bersih dan minim iritasi.</p>
      </div>

      <div class="tile-grid tile-grid--narrow">
        <article class="tile" id="brows">
          <h3 class="tile__title">Brows</h3>
          <p class="tile__desc">Merapikan area alis dengan hasil presisi tanpa rasa perih berlebihan.</p>
        </article>
        <article class="tile" id="underarms">
          <h3 class="tile__title">Underarms</h3>
          <p class="tile__desc">Kulit ketiak lebih halus dan cerah dengan perawatan yang lembut.</p>
        </article>
        <article class="tile" id="upperlips">
          <h3 class="tile__title">Upper Lips</h3>
          <p class="tile__desc">Menghilangkan bulu halus di area bibir atas secara cepat dan aman.</p>
        </article>
        <article class="tile" id="legs">
          <h3 class="tile__title">Legs <span class="tile__note">(half/full)</span></h3>
          <p class="tile__desc">Kaki bersih dan mulus lebih lama dengan teknik waxing profesional.</p>
        </article>
        <article class="tile" id="arms">
          <h3 class="tile__title">Arms <span class="tile__note">(half/full)</span></h3>
          <p class="tile__desc">Kulit tangan terasa lembut dan bebas bulu dengan hasil tahan lama.</p>
        </article>
      </div>
    </div>
  </section>
@endsection
