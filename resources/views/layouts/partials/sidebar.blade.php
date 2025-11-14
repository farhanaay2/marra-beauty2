<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Sidebar • Marra</title>

  <!-- INLINE CSS (sementara untuk memastikan tampilan OK) -->
  <style>
    :root{--ink:#1b1b1b;--muted:#6f6f6f;--rose:#b56a7a;--rose-dark:#7a2f4f;--line:#eee}
    *{box-sizing:border-box} html,body{margin:0;padding:0}
    body{font-family:Poppins,system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial;color:var(--ink);background:#fff}
    .wrap{max-width:420px;margin:24px auto;border:1px solid var(--line);border-radius:12px;overflow:hidden}

    /* Sidebar */
    .mb-menu{padding:8px 0;background:#fff}
    .mb-menu__list{list-style:none;margin:0;padding:0}
    .mb-menu__link{display:block;padding:16px 20px;font-weight:500;color:var(--ink);border-bottom:1px solid var(--line)}
    .mb-menu__link.is-current{color:var(--rose-dark);border-bottom:2px solid var(--rose-dark)}

    /* Accordion */
    .mb-acc{border-bottom:1px solid var(--line)}
    .mb-acc__trigger{
      width:100%;display:flex;align-items:center;justify-content:space-between;
      gap:12px;padding:16px 20px;background:#fff;border:0;cursor:pointer;
      font-weight:600;color:var(--ink)
    }
    .mb-acc__icon{
      width:24px;height:24px;display:inline-grid;place-items:center;
      border-radius:6px;border:1px solid var(--rose-dark);
      font-weight:700;line-height:1;user-select:none;
      transition:transform .2s ease,background-color .2s ease,color .2s ease;
      color:var(--rose-dark)
    }
    .mb-acc__trigger[aria-expanded="true"] .mb-acc__icon{transform:rotate(45deg);background:var(--rose-dark);color:#fff}
    .mb-acc__panel{list-style:none;margin:0;padding:0 12px 8px 12px;overflow:hidden;max-height:0;transition:max-height .28s ease;border-left:3px solid rgba(181,106,122,.18)}
    .mb-acc__panel[data-open="true"]{max-height:480px}
    .mb-sub__link{display:block;padding:10px 12px;margin:6px 8px;border-radius:10px;background:#faf7f6;color:#333;font-weight:500}
    .mb-sub__link:hover{background:#f3ecea}
  </style>
</head>
<body>
  <div class="wrap">
    <aside class="mb-sidebar" aria-label="Sidebar">
      <nav class="mb-menu">
        <ul class="mb-menu__list">
          <li><a href="#" class="mb-menu__link is-current">Home</a></li>

          <!-- NAILS dengan tombol + -->
          <li class="mb-acc">
            <button class="mb-acc__trigger" aria-expanded="false" aria-controls="submenu-nails">
              <span class="mb-acc__label">Nails</span>
              <span class="mb-acc__icon" aria-hidden="true">+</span>
            </button>
            <ul class="mb-acc__panel" id="submenu-nails" hidden>
              <li><a class="mb-sub__link" href="#">Classic</a></li>
              <li><a class="mb-sub__link" href="#">Russian</a></li>
              <li><a class="mb-sub__link" href="#">Extension</a></li>
              <li><a class="mb-sub__link" href="#">Removal</a></li>
            </ul>
          </li>

          <li><a href="#" class="mb-menu__link">Lashes</a></li>
          <li><a href="#" class="mb-menu__link">Brows</a></li>
          <li><a href="#" class="mb-menu__link">Lips</a></li>
          <li><a href="#" class="mb-menu__link">Press On Nails</a></li>
          <li><a href="#" class="mb-menu__link">Menu Harga & Kontak</a></li>
        </ul>
      </nav>
    </aside>
  </div>

  <script>
    // Toggle accordion
    document.querySelectorAll('.mb-acc__trigger').forEach(btn=>{
      const panel=document.getElementById(btn.getAttribute('aria-controls'));
      btn.addEventListener('click',()=>{
        const open=btn.getAttribute('aria-expanded')==='true';
        btn.setAttribute('aria-expanded',String(!open));
        if(open){ panel.dataset.open='false'; panel.setAttribute('hidden',''); }
        else{ panel.dataset.open='true'; panel.removeAttribute('hidden'); }
      });
    });
  </script>
</body>
</html>
