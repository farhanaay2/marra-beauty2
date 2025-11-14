@extends('layouts.front')
@section('title','Lashes')

@section('content')
  <section class="section">
    <div class="container">
      <div class="section__header section__header--center">
        <span class="eyebrow">Eyelash extension</span>
        <h1 class="section__title">Lashes yang ringan &amp; natural</h1>
        <p class="section__subtitle">Pilih gaya bulu mata favorit Anda dengan kombinasi curl, thickness, dan panjang yang personal.</p>
      </div>

      <div class="tile-grid">
        <article class="tile" id="classic-super">
          <h3 class="tile__title">Classic Series</h3>
          <ul class="tile__list">
            <li>Super Natural</li>
            <li id="classic-natural">Natural</li>
            <li id="classic-medium">Medium</li>
            <li id="classic-volume">Volume</li>
          </ul>
        </article>

        <article class="tile" id="russian-natural">
          <h3 class="tile__title">Russian Volume</h3>
          <ul class="tile__list">
            <li>Natural</li>
            <li id="russian-medium">Medium</li>
            <li id="russian-volume">Volume</li>
          </ul>
        </article>

        <article class="tile" id="wispy-natural">
          <h3 class="tile__title">Wispy Series</h3>
          <ul class="tile__list">
            <li>Natural</li>
            <li id="wispy-medium">Medium</li>
          </ul>
        </article>
      </div>
    </div>
  </section>
@endsection
