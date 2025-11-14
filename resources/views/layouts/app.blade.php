app blade marra2
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','Marra Beauty') • Marra Beauty</title>

  {{-- Favicon & Fonts --}}
  <link rel="icon" href="{{ asset('logo-marra.png') }}" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  {{-- CSS utama --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="front">

  {{-- HEADER (logo tengah + burger) --}}
  <header class="header">
    <div class="wrap header__inner header--center">
      <a class="logo" href="{{ route('home') }}">marra</a>

      {{-- backdrop & burger (muncul di mobile) --}}
      <div class="menu-backdrop" id="menuBackdrop"></div>
      <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
    </div>
  </header>

  {{-- DRAWER MENU ala Anata --}}
  <nav id="mainMenu" class="menu menu--center" aria-label="Primary">
    {{-- header kecil di dalam drawer --}}
    <div class="drawer-head">
      <div class="drawer-title">Home</div>
      <button class="drawer-close" aria-label="Tutup menu">×</button>
    </div>

    {{-- PENTING: pakai UL/LI (bukan div) supaya CSS “+ kanan” jalan --}}
    <ul class="menu" style="flex-direction:column;gap:0">
      {{-- HOME (tanpa +) --}}
      <li class="menu__item">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      </li>

      {{-- NAILS --}}
      <li class="menu__item has-sub">
        <a href="{{ route('nails') }}" class="submenu-label {{ request()->routeIs('nails') ? 'active' : '' }}">Nails</a>
        <button class="submenu-plus" type="button" aria-expanded="false" aria-controls="sub-nails">+</button>
        <div class="dropdown" id="sub-nails">
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
      </li>

      {{-- LASHES --}}
      <li class="menu__item has-sub">
        <a href="{{ url('/lashes') }}" class="submenu-label">Lashes</a>
        <button class="submenu-plus" type="button" aria-expanded="false" aria-controls="sub-lashes">+</button>
        <div class="dropdown" id="sub-lashes">
          <ul class="dropdown__list">
            <li><a href="/lashes#classic">Classic</a></li>
            <li><a href="/lashes#russian">Russian Volume</a></li>
            <li><a href="/lashes#wispy">Wispy</a></li>
          </ul>
        </div>
      </li>

      {{-- BROWS --}}
      <li class="menu__item has-sub">
        <a href="{{ url('/brows') }}" class="submenu-label">Brows</a>
        <button class="submenu-plus" type="button" aria-expanded="false" aria-controls="sub-brows">+</button>
        <div class="dropdown" id="sub-brows">
          <ul class="dropdown__list">
            <li><a href="/brows#shaping">Shaping</a></li>
            <li><a href="/brows#lamination">Lamination</a></li>
            <li><a href="/brows#tint">Tint</a></li>
          </ul>
        </div>
      </li>

      {{-- LIPS --}}
      <li class="menu__item has-sub">
        <a href="{{ url('/lips') }}" class="submenu-label">Lips</a>
        <button class="submenu-plus" type="button" aria-expanded="false" aria-controls="sub-lips">+</button>
        <div class="dropdown" id="sub-lips">
          <ul class="dropdown__list">
            <li><a href="/lips#ombre">Ombre</a></li>
            <li><a href="/lips#lipblush">Lip Blush</a></li>
            <li><a href="/lips#touchup">Touch Up</a></li>
          </ul>
        </div>
      </li>

      {{-- PRESS ON NAILS --}}
      <li class="menu__item has-sub">
        <a href="{{ url('/press-on') }}" class="submenu-label">Press On Nails</a>
        <button class="submenu-plus" type="button" aria-expanded="false" aria-controls="sub-presson">+</button>
        <div class="dropdown" id="sub-presson">
          <ul class="dropdown__list">
            <li><a href="/press-on#basic">Basic Set</a></li>
            <li><a href="/press-on#premium">Premium Set</a></li>
            <li><a href="/press-on#custom">Custom Design</a></li>
          </ul>
        </div>
      </li>

      {{-- MENU HARGA (tanpa +) --}}
      <li class="menu__item">
        <a href="{{ url('/pricelist') }}">Menu Harga & Kontak</a>
      </li>
    </ul>
  </nav>

  <main class="content">@yield('content')</main>

  {{-- JS: buka/utup drawer + toggle “+ / –” --}}
  <script>
    (function(){
      const burger   = document.getElementById('menuToggle');
      const drawer   = document.getElementById('mainMenu');
      const backdrop = document.getElementById('menuBackdrop');
      const closeBtn = document.querySelector('.drawer-close');

      function openMenu(){ drawer.classList.add('show'); backdrop.classList.add('show'); document.body.classList.add('menu-open'); }
      function closeMenu(){ drawer.classList.remove('show'); backdrop.classList.remove('show'); document.body.classList.remove('menu-open'); }
      function toggleMenu(){ drawer.classList.contains('show') ? closeMenu() : openMenu(); }

      burger?.addEventListener('click', toggleMenu);
      backdrop?.addEventListener('click', closeMenu);
      closeBtn?.addEventListener('click', closeMenu);

      // tombol + / –
      document.querySelectorAll('.submenu-plus').forEach(btn=>{
        btn.addEventListener('click', e=>{
          const li   = btn.closest('.has-sub');
          const open = li.classList.toggle('open');
          btn.textContent = open ? '–' : '+';
          btn.setAttribute('aria-expanded', open ? 'true' : 'false');
          e.stopPropagation();
        });
      });

      // tutup drawer saat klik link
      drawer?.querySelectorAll('a[href]').forEach(a=> a.addEventListener('click', closeMenu));

      // safety saat resize ke desktop
      const mq = window.matchMedia('(min-width:981px)');
      function reset(e){ if(e.matches) closeMenu(); }
      mq.addEventListener ? mq.addEventListener('change', reset) : mq.addListener(reset);
    })();
  </script>

  {{-- JS lain (opsional) --}}
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
