document.addEventListener('DOMContentLoaded', () => {
  // === Simple slider ===
  const slider = document.querySelector('.hero-slider');
  if (slider) {
    const slides = [...slider.querySelectorAll('.slide')];
    const prev = slider.querySelector('#prevSlide');
    const next = slider.querySelector('#nextSlide');
    let i = 0;

    const show = (idx) => {
      slides.forEach(s => s.classList.remove('is-active'));
      slides[idx].classList.add('is-active');
    };
    const go = (dir) => {
      i = (i + dir + slides.length) % slides.length;
      show(i);
    };
    prev?.addEventListener('click', () => go(-1));
    next?.addEventListener('click', () => go(1));

    // auto play
    setInterval(() => go(1), 5000);
  }

  // === Horizontal product scroller ===
  document.querySelectorAll('.scroll').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.getAttribute('data-target');
      const el = document.getElementById(id);
      if (!el) return;
      const step = el.clientWidth * 0.8;
      el.scrollBy({ left: btn.classList.contains('next') ? step : -step, behavior: 'smooth' });
    });
  });

  // mobile menu toggle
  const toggle = document.getElementById('menuToggle');
  const menu = document.getElementById('mainMenu');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
      Object.assign(menu.style, {
        flexDirection:'column', gap:'14px', background:'#fff', position:'absolute',
        top:'58px', right:'20px', padding:'14px', border:'1px solid #eee',
        borderRadius:'12px', boxShadow:'0 10px 30px rgba(0,0,0,.06)'
      });
    });
  }
});
