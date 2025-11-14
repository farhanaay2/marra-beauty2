@extends('layouts.front')
@section('title','Waxing')

@section('content')

<section class="wrap" style="padding:60px 0">
  <h2 class="title">Waxing</h2>
  <p class="subtitle">Perawatan waxing dengan hasil rapi & higienis</p>

  <div class="price-list">

    {{-- BROWS --}}
    <div class="pl-group" id="brows">
      <h3 class="pl-title">Brows</h3>
      <div class="pl-line"></div>
    </div>

    {{-- UNDERARMS --}}
    <div class="pl-group" id="underarms">
      <h3 class="pl-title">Underarms</h3>
      <div class="pl-line"></div>
    </div>

    {{-- UPPER LIPS --}}
    <div class="pl-group" id="upperlips">
      <h3 class="pl-title">Upper Lips</h3>
      <div class="pl-line"></div>
    </div>

    {{-- LEGS --}}
    <div class="pl-group" id="legs">
      <h3 class="pl-title">Legs <span class="note">(half/full)</span></h3>
      <div class="pl-line"></div>
    </div>

    {{-- ARMS --}}
    <div class="pl-group" id="arms">
      <h3 class="pl-title">Arms <span class="note">(half/full)</span></h3>
      <div class="pl-line"></div>
    </div>

  </div>
</section>

@endsection
