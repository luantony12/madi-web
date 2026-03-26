/* ═══════════════════════════════════════════════
   Constructora MADI — app.js
   ═══════════════════════════════════════════════ */

/* ── Temas de color ── */
const themes = {
  gold: {
    '--gold':       '#C9A84C',
    '--gold-light': '#E8C97A',
    '--dark':       '#0D1A2E',
    '--dark-2':     '#122040',
    '--dark-3':     '#1A2E55',
    '--dark-4':     '#22467a',
    '--gray':       '#5B7BA8',
    '--gray-light': '#8FAFD4',
    '--white':      '#EEF2F8',
  },
  orange: {
    '--gold':       '#E8630A',
    '--gold-light': '#FF8C3A',
    '--dark':       '#0D1A2E',
    '--dark-2':     '#122040',
    '--dark-3':     '#1A2E55',
    '--dark-4':     '#22467a',
    '--gray':       '#5B7BA8',
    '--gray-light': '#8FAFD4',
    '--white':      '#F5F5F0',
  },
  silver: {
    '--gold':       '#A8C0D6',
    '--gold-light': '#C8DCF0',
    '--dark':       '#0D1A2E',
    '--dark-2':     '#122040',
    '--dark-3':     '#1A2E55',
    '--dark-4':     '#22467a',
    '--gray':       '#4A6A96',
    '--gray-light': '#7A9FC0',
    '--white':      '#EEF2F8',
  },

  green: {
    '--gold':       '#C9A84C',
    '--gold-light': '#E8C97A',
    '--dark':       '#0A1A10',
    '--dark-2':     '#0F2318',
    '--dark-3':     '#1A3A2A',
    '--dark-4':     '#2E7D4F',
    '--gray':       '#5B8A6B',
    '--gray-light': '#8FBFA0',
    '--white':      '#EEF5EE',
  },
};

function applyTheme(key) {
  const t = themes[key];
  if (!t) return;
  Object.entries(t).forEach(([k, v]) => {
    document.documentElement.style.setProperty(k, v);
  });
  document.querySelectorAll('.theme-option').forEach(o => {
    o.classList.toggle('selected', o.dataset.theme === key);
  });
  localStorage.setItem('madi-theme', key);
}

/* ── Todo en un solo DOMContentLoaded ── */
document.addEventListener('DOMContentLoaded', () => {

  /* ── Aplicar tema guardado ── */
  applyTheme(localStorage.getItem('madi-theme') || 'gold');

  /* ── Nav activo en scroll ── */
  const navLinks    = document.querySelectorAll('.nav-item[href]');
  const sections    = document.querySelectorAll('section[id]');
  const scrollTopBtn = document.getElementById('scroll-top');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(s => {
      if (window.scrollY >= s.offsetTop - 120) current = s.id;
    });
    navLinks.forEach(n => {
      n.classList.toggle('active', n.getAttribute('href') === '#' + current);
    });
    if (scrollTopBtn) scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
  });

  /* ── Filtros de proyectos ── */
  const projectCards = document.querySelectorAll('.project-card');

  projectCards.forEach(card => {
    card.dataset.featured = card.classList.contains('featured') ? 'true' : 'false';
  });

  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const filter = btn.dataset.filter;
      projectCards.forEach(card => {
        const match = filter === 'all' || card.dataset.category === filter;
        card.style.display = match ? '' : 'none';
        if (filter !== 'all') {
          card.classList.remove('featured');
        } else if (card.dataset.featured === 'true') {
          card.classList.add('featured');
        }
      });
    });
  });

  /* ── Fade-in al hacer scroll ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.opacity = '1';
        e.target.style.transform = 'translateY(0)';
        e.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll(
    '.service-card, .project-card, .process-step, .stat-item, .about-value, .contact-item'
  ).forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    observer.observe(el);
  });

  /* ── Auto-dismiss alerta de éxito ── */
  const alertSuccess = document.querySelector('.alert-success');
  if (alertSuccess) {
    setTimeout(() => {
      alertSuccess.style.transition = 'opacity 0.5s';
      alertSuccess.style.opacity = '0';
      setTimeout(() => alertSuccess.remove(), 500);
    }, 5000);
  }

  /* ── Theme switcher ── */
  const toggle = document.getElementById('themeToggle');
  const panel  = document.getElementById('themePanel');

  if (toggle && panel) {
    toggle.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      panel.classList.toggle('open');
    });

    document.addEventListener('click', (e) => {
      if (!panel.contains(e.target) && e.target !== toggle) {
        panel.classList.remove('open');
      }
    });

    document.querySelectorAll('.theme-option').forEach(opt => {
      opt.addEventListener('click', (e) => {
        e.stopPropagation();
        applyTheme(opt.dataset.theme);
        panel.classList.remove('open');
      });
    });
  }
  // Después de toggle.addEventListener('click', ...)
  // Agrega esto para reposicionar si se sale de pantalla
  toggle.addEventListener('click', (e) => {
    e.preventDefault();
    e.stopPropagation();
    panel.classList.toggle('open');

    // Reposicionar si se sale por la derecha
    const rect = panel.getBoundingClientRect();
    if (rect.right > window.innerWidth) {
      panel.style.left = 'auto';
      panel.style.right = '16px';
    }
  });
});