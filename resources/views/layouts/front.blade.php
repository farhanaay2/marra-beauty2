<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title','Marra Beauty')</title>

  {{-- Favicon & Fonts --}}
  <link rel="icon" href="{{ asset('logo-marra.png') }}" type="image/png"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  {{-- CSS utama --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="front">
  <div class="site-nav__overlay" id="navOverlay" aria-hidden="true"></div>

  <header class="site-header">
    <div class="container header-bar">
      <button class="nav-toggle" id="navToggle" type="button" aria-expanded="false" aria-controls="primaryNav">
        <span class="sr-only">Buka navigasi</span>
        <span class="nav-toggle__line"></span>
        <span class="nav-toggle__line"></span>
        <span class="nav-toggle__line"></span>
      </button>

      <a class="brand" href="{{ route('home') }}">marra</a>

      <a class="header-cta" href="https://wa.me/6282261252011" target="_blank" rel="noopener">Reservasi</a>
    </div>

    <nav class="site-nav" id="primaryNav" aria-label="Navigasi utama">
      <div class="site-nav__head">
        <span>Jelajahi Marra</span>
        <button class="site-nav__close" id="navClose" type="button" aria-label="Tutup menu">×</button>
      </div>
      <ul class="site-nav__list">
        <li class="site-nav__item {{ request()->routeIs('home') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="site-nav__item has-children {{ request()->routeIs('nails') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('nails') }}">Nails</a>
          <button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="nav-nails">
            <span class="sr-only">Tampilkan submenu Nails</span>
            <span class="chevron"></span>
          </button>
          <div class="site-nav__submenu" id="nav-nails">
            <ul>
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
        <li class="site-nav__item has-children {{ request()->routeIs('lashes') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('lashes') }}">Lashes</a>
          <button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="nav-lashes">
            <span class="sr-only">Tampilkan submenu Lashes</span>
            <span class="chevron"></span>
          </button>
          <div class="site-nav__submenu" id="nav-lashes">
            <ul>
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
        </li>
        <li class="site-nav__item has-children {{ request()->routeIs('brows') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('brows') }}">Brows</a>
          <button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="nav-brows">
            <span class="sr-only">Tampilkan submenu Brows</span>
            <span class="chevron"></span>
          </button>
          <div class="site-nav__submenu" id="nav-brows">
            <ul>
              <li><a href="{{ route('brows') }}#shape">Brow Shaping</a></li>
              <li><a href="{{ route('brows') }}#lamination">Brow Lamination</a></li>
              <li><a href="{{ route('brows') }}#bomber">Brow Bomber</a></li>
            </ul>
          </div>
        </li>
        <li class="site-nav__item has-children {{ request()->routeIs('lips') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('lips') }}">Lips</a>
          <button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="nav-lips">
            <span class="sr-only">Tampilkan submenu Lips</span>
            <span class="chevron"></span>
          </button>
          <div class="site-nav__submenu" id="nav-lips">
            <ul>
              <li><a href="{{ route('lips') }}#velvet">Velvet Lips</a></li>
              <li><a href="{{ route('lips') }}#retouch">Velvet Lips + Retouch</a></li>
            </ul>
          </div>
        </li>
        <li class="site-nav__item {{ request()->routeIs('presson') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('presson') }}">Press On Nails</a>
        </li>
        <li class="site-nav__item {{ request()->routeIs('waxing') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('waxing') }}">Waxing</a>
        </li>
        <li class="site-nav__item {{ request()->routeIs('pricelist') ? 'is-current' : '' }}">
          <a class="site-nav__link" href="{{ route('pricelist') }}">Menu Harga &amp; Kontak</a>
        </li>
      </ul>
    </nav>
  </header>

  <main class="site-main">
    @yield('content')
  </main>

  <footer class="site-footer">
    <div class="container site-footer__inner">
      <div class="site-footer__brand">
        <a class="brand brand--small" href="{{ route('home') }}">marra</a>
        <p>Studio kecantikan terpadu untuk nails, lashes, dan perawatan wajah di Bandung.</p>
      </div>
      <div class="site-footer__links">
        <a href="{{ route('pricelist') }}">Menu Harga</a>
        <a href="{{ route('lokasi') }}">Lokasi</a>
        <a href="https://www.instagram.com/marrabeauty.id" target="_blank" rel="noopener">Instagram</a>
      </div>
    </div>
    <p class="site-footer__copy">© {{ date('Y') }} Marra Beauty. All rights reserved.</p>
  </footer>

  {{-- Navigasi & Drawer scripts --}}
  <script>
    (() => {
      const body = document.body;
      const nav = document.getElementById('primaryNav');
      const toggle = document.getElementById('navToggle');
      const close = document.getElementById('navClose');
      const overlay = document.getElementById('navOverlay');
      const mqDesktop = window.matchMedia('(min-width: 992px)');

      const openNav = () => {
        nav?.classList.add('is-open');
        overlay?.classList.add('is-active');
        body.classList.add('nav-open');
        toggle?.setAttribute('aria-expanded', 'true');
      };

      const closeNav = () => {
        nav?.classList.remove('is-open');
        overlay?.classList.remove('is-active');
        body.classList.remove('nav-open');
        toggle?.setAttribute('aria-expanded', 'false');
      };

      toggle?.addEventListener('click', () => {
        if (nav?.classList.contains('is-open')) {
          closeNav();
        } else {
          openNav();
        }
      });

      close?.addEventListener('click', closeNav);
      overlay?.addEventListener('click', closeNav);

      nav?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          if (!mqDesktop.matches) {
            closeNav();
          }
        });
      });

      nav?.querySelectorAll('.has-children .site-nav__toggle').forEach(btn => {
        const item = btn.closest('.has-children');
        btn.addEventListener('click', () => {
          const open = item?.classList.toggle('is-open');
          btn.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
      });

      const handleResize = e => {
        if (e.matches) {
          closeNav();
          nav?.querySelectorAll('.has-children').forEach(item => item.classList.remove('is-open'));
          nav?.querySelectorAll('.site-nav__toggle').forEach(btn => btn.setAttribute('aria-expanded', 'false'));
        }
      };

      if (mqDesktop.addEventListener) {
        mqDesktop.addEventListener('change', handleResize);
      } else if (mqDesktop.addListener) {
        mqDesktop.addListener(handleResize);
      }
    })();
  </script>

  @stack('scripts')
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
