<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title','Marra Beauty')</title>

  {{-- Favicon & Fonts --}}
  <link rel="icon" href="{{ asset('logo-marra.png') }}" type="image/png"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  {{-- CSS utama --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="front">

  {{-- ============ HEADER ============ --}}
  <header class="header">
    <div class="wrap header__inner header--center">
      {{-- Logo --}}
      <a class="logo" href="{{ route('home') }}">marra</a>

      {{-- NAV: semua item menu & dropdown ADA di dalam nav ini --}}
      <nav class="menu menu--center" id="mainMenu" aria-label="Primary">

        {{-- ====== Drawer head (muncul di mobile) ====== --}}
        <div class="drawer-head">
          <span class="drawer-title">Home</span>
          <button class="drawer-close" id="menuClose" aria-label="Tutup menu">×</button>
        </div>

        {{-- HOME --}}
        <div class="menu__item">
          <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </div>

        {{-- NAILS (dropdown) --}}
        <div class="menu__item has-sub">
          <a class="submenu-toggle {{ request()->routeIs('nails') ? 'active' : '' }}" href="{{ route('nails') }}">Nails</a>
          <div class="dropdown">
            <ul class="dropdown__list">
              <li><a href="{{ route('nails') }}#manicure">Manicure Russian Express</a></li>
              <li><a href="{{ route('nails') }}#pedicure">Pedicure Russian Express</a></li>
              <li><a href="{{ route('nails') }}#signature">Signature Pedicure</a></li>
              <li><a href="{{ route('nails') }}#luxury">Pedicure Luxury Spa</a></li>
              <li><a href="{{ route('nails') }}#gel">Manicure + Gel Polish</a></li>
              <li><a href="{{ route('nails') }}#fake">Manicure + Fake Nails</a></li>
              <li><a href="{{ route('nails') }}#extension">Manicure + Nail Extension</a></li>
              <li><a href="{{ route('nails') }}#pedigel">Pedicure + Gel Polish</a></li>
              <li><a href="{{ route('nails') }}#pedifake">Pedicure + Fake Nails</a></li>
              <li><a href="{{ route('nails') }}#addons">Add Ons</a></li>
              <li><a href="{{ route('nails') }}#removal">Nails Removal</a></li>
            </ul>
          </div>
        </div>

        {{-- LASHES (dropdown) --}}
        <div class="menu__item has-sub">
          <a href="{{ route('lashes') }}" class="submenu-toggle {{ request()->routeIs('lashes') ? 'active' : '' }}">Lashes</a>
          <div class="dropdown">
            <ul class="dropdown__list">
              <li class="group">Classic</li>
              <li><a href="{{ route('lashes') }}#classic-super">Super Natural</a></li>
              <li><a href="{{ route('lashes') }}#classic-natural">Natural</a></li>
              <li><a href="{{ route('lashes') }}#classic-medium">Medium</a></li>
              <li><a href="{{ route('lashes') }}#classic-volume">Volume</a></li>

              <li class="group">Russian</li>
              <li><a href="{{ route('lashes') }}#russian-natural">Natural</a></li>
              <li><a href="{{ route('lashes') }}#russian-medium">Medium</a></li>
              <li><a href="{{ route('lashes') }}#russian-volume">Volume</a></li>

              <li class="group">Wispy</li>
              <li><a href="{{ route('lashes') }}#wispy-natural">Natural</a></li>
              <li><a href="{{ route('lashes') }}#wispy-medium">Medium</a></li>
            </ul>
          </div>
        </div>

        {{-- BROWS (dropdown) --}}
        <div class="menu__item has-sub">
          <a href="{{ route('brows') }}" class="submenu-toggle {{ request()->routeIs('brows') ? 'active' : '' }}">Brows</a>
          <div class="dropdown">
            <ul class="dropdown__list">
              <li><a href="{{ route('brows') }}#shape">Brow Shaping</a></li>
              <li><a href="{{ route('brows') }}#lamination">Brow Lamination</a></li>
              <li><a href="{{ route('brows') }}#bomber">Brow Bomber</a></li>
            </ul>
          </div>
        </div>

        {{-- LIPS (dropdown) --}}
        <div class="menu__item has-sub">
          <a href="{{ route('lips') }}" class="submenu-toggle {{ request()->routeIs('lips') ? 'active' : '' }}">Lips</a>
          <div class="dropdown">
            <ul class="dropdown__list">
              <li><a href="{{ route('lips') }}#velvet">Velvet Lips</a></li>
              <li><a href="{{ route('lips') }}#retouch">Velvet Lips + Retouch</a></li>
            </ul>
          </div>
        </div>

        {{-- Menu lain --}}
        <div class="menu__item"><a class="{{ request()->routeIs('presson') ? 'active' : '' }}" href="{{ route('presson') }}">Press On Nails</a></div>
        <div class="menu__item"><a class="{{ request()->routeIs('pricelist') ? 'active' : '' }}" href="{{ route('pricelist') }}">Menu Harga & Kontak</a></div>
      </nav>

      {{-- Backdrop & Burger --}}
      <div class="menu-backdrop" id="menuBackdrop"></div>
      <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
    </div>
  </header>

  {{-- ============ PAGE CONTENT ============ --}}
  @yield('content')

  {{-- ============ JS Drawer & Submenu ============ --}}
  <script>
    const toggleBtn = document.getElementById('menuToggle');
    const closeBtn  = document.getElementById('menuClose'); // bisa null kalau belum ada
    const mainMenu  = document.getElementById('mainMenu');
    const backdrop  = document.getElementById('menuBackdrop');

    function toggleMenu(){
      mainMenu.classList.toggle('show');
      backdrop.classList.toggle('show');
      document.body.classList.toggle('menu-open');
    }
    toggleBtn?.addEventListener('click', toggleMenu);
    closeBtn?.addEventListener('click', toggleMenu);
    backdrop?.addEventListener('click', toggleMenu);

    // Submenu mobile (accordion)
    document.querySelectorAll('.menu .has-sub > a.submenu-toggle').forEach(a=>{
      a.addEventListener('click', e=>{
        if (window.matchMedia('(max-width:980px)').matches){
          e.preventDefault();
          a.parentElement.classList.toggle('open');
        }
      });
    });
  </script>

  {{-- JS anda sendiri (opsional) --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
