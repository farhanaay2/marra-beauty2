@extends('layouts.front')
@section('title','Nails')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Katalog layanan</span>
        <h1 class="section__title">Perawatan kuku favorit di Marra</h1>
        <p class="section__subtitle">Dari manicure express hingga nail extension, semua dilakukan dengan teknik modern dan standar higienis tinggi.</p>
      </div>

      <div class="tile-grid">
        <article class="tile" id="manicure">
          <h3 class="tile__title">Manicure &amp; Pedicure</h3>
          <ul class="tile__list">
            <li>Manicure Russian Express</li>
            <li id="pedicure">Pedicure Russian Express</li>
            <li id="signature">Signature Pedicure</li>
            <li id="luxury">Pedicure Luxury Spa</li>
          </ul>
        </article>

        <article class="tile" id="gel">
          <h3 class="tile__title">Gel &amp; Polish</h3>
          <ul class="tile__list">
            <li>Manicure + Gel Polish</li>
            <li id="pedigel">Pedicure + Gel Polish</li>
          </ul>
        </article>

        <article class="tile" id="fake">
          <h3 class="tile__title">Fake Nails</h3>
          <ul class="tile__list">
            <li>Manicure + Fake Nails</li>
            <li id="pedifake">Pedicure + Fake Nails</li>
          </ul>
        </article>

        <article class="tile" id="extension">
          <h3 class="tile__title">Nail Extension</h3>
          <ul class="tile__list">
            <li>Manicure + Nail Extension</li>
            <li>Refill Nail Extension</li>
          </ul>
        </article>

        <article class="tile" id="addons">
          <h3 class="tile__title">Add Ons</h3>
          <ul class="tile__list">
            <li>Art Design</li>
            <li>Cat Eye</li>
            <li>Chrome</li>
            <li>Air Brush</li>
            <li>3D Decorations</li>
          </ul>
        </article>

        <article class="tile" id="removal">
          <h3 class="tile__title">Nails Removal</h3>
          <ul class="tile__list">
            <li>Gel Polish Removal</li>
            <li>Fake Nails Removal</li>
            <li>Nail Extension Removal</li>
          </ul>
        </article>
      </div>
    </div>
  </section>
@endsection
