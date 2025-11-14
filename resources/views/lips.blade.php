@extends('layouts.front')
@section('title','Lips — Marra Beauty')

@section('content')
<div class="wrap" style="padding:40px 0">

  <h2 class="title">Lips Treatment</h2>
  <p class="subtitle">Warna bibir tahan lama dengan hasil natural</p>

  <div class="price-list">

    {{-- Velvet Lips --}}
    <div id="velvet" class="pl-group">
      <div class="pl-title">Velvet Lips</div>
      <div class="pl-line"></div>
      <p class="note">Teknik pewarnaan bibir agar tampak fresh & merata dengan hasil beludru lembut.</p>
    </div>

    {{-- Velvet + Retouch --}}
    <div id="retouch" class="pl-group">
      <div class="pl-title">Velvet Lips + Retouch</div>
      <div class="pl-line"></div>
      <p class="note">Termasuk retouch agar warna lebih tahan lama & natural sesuai kulit bibir.</p>
    </div>

  </div>

</div>
@endsection
