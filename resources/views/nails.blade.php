@extends('layouts.front')
@section('title','Nails')

@section('content')
<section class="wrap" style="padding:34px 0">
  <h1 class="title">Nails</h1>
  <p class="subtitle">Katalog layanan (tanpa harga, coming soon)</p>

  <div class="nails__grid">
    <div class="ncard">
      <h3>Manicure &amp; Pedicure</h3>
      <ul>
        <li>Manicure Russian Express</li>
        <li>Pedicure Russian Express</li>
        <li>Signature Pedicure</li>
        <li>Pedicure Luxury Spa</li>
      </ul>
    </div>

    <div class="ncard">
      <h3>Gel &amp; Polish</h3>
      <ul>
        <li>Manicure + Gel Polish</li>
        <li>Pedicure + Gel Polish</li>
      </ul>
    </div>

    <div class="ncard">
      <h3>Fake / Extensions</h3>
      <ul>
        <li>Manicure + Fake Nails</li>
        <li>Manicure + Nail Extension</li>
        <li>Pedicure + Fake Nails</li>
      </ul>
    </div>

    <div class="ncard">
      <h3>Add Ons</h3>
      <ul>
        <li>Fake Nails</li>
        <li>Nail Extension</li>
        <li>Art Design</li>
        <li>Cat Eye</li>
        <li>Chrome</li>
        <li>Air Brush</li>
        <li>3D</li>
      </ul>
    </div>

    <div class="ncard">
      <h3>Nails Removal</h3>
      <ul>
        <li>Gel Polish</li>
        <li>Fake Nails</li>
        <li>Nail Extension</li>
      </ul>
    </div>
  </div>
</section>
@endsection
