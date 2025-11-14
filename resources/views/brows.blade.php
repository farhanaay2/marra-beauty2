@extends('layouts.front')
@section('title','Brows')

@section('content')

<section class="wrap" style="margin-top: 80px; margin-bottom: 80px;">

  <h2 class="title">Brows</h2>
  <p class="subtitle">Perawatan alis dengan hasil rapi & presisi</p>

  <div class="price-list">

    {{-- Brow Shape --}}
    <div class="pl-group" id="shape">
      <div class="pl-title">Brow Shaping</div>
      <div class="pl-line"></div>
      <p class="note">Merapikan bentuk alis agar sesuai struktur wajah</p>
    </div>

    {{-- Brow Lamination --}}
    <div class="pl-group" id="lamination">
      <div class="pl-title">Brow Lamination</div>
      <div class="pl-line"></div>
      <p class="note">Menjadikan alis tampak lebih tebal dan tertata</p>
    </div>

    {{-- Brow Bomber --}}
    <div class="pl-group" id="bomber">
      <div class="pl-title">Brow Bomber</div>
      <div class="pl-line"></div>
      <p class="note">Treatment alis premium agar lebih sehat & fluffy</p>
    </div>

  </div>

</section>

@endsection
