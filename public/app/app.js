/* ═══════════════════════════════════════════════
   Constructora — app.js
   ═══════════════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Active sidebar nav on scroll ── */
  const navItems = document.querySelectorAll('.nav-item');
  const sections = document.querySelectorAll('section[id]');
  const scrollTopBtn = document.getElementById('scroll-top');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(s => {
      if (window.scrollY >= s.offsetTop - 120) current = s.id;
    });
    navItems.forEach(n => {
      n.classList.toggle('active', n.getAttribute('href') === '#' + current);
    });

    // Show / hide scroll-to-top button
    if (scrollTopBtn) {
      scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
    }
  });

  /* ── Project filters ── */
  const filterBtns = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      projectCards.forEach(card => {
        const match = filter === 'all' || card.dataset.category === filter;
        card.style.display = match ? '' : 'none';

        // Remove featured span on filtered view so grid looks clean
        if (filter !== 'all') {
          card.classList.remove('featured');
        } else {
          // Restore original featured state from data attribute if needed
          if (card.dataset.featured === 'true') card.classList.add('featured');
        }
      });
    });
  });

  // Store featured state
  projectCards.forEach(card => {
    card.dataset.featured = card.classList.contains('featured') ? 'true' : 'false';
  });

  /* ── Intersection Observer: fade-in on scroll ── */
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

  /* ── Auto-dismiss success alert ── */
  const alertSuccess = document.querySelector('.alert-success');
  if (alertSuccess) {
    setTimeout(() => {
      alertSuccess.style.transition = 'opacity 0.5s';
      alertSuccess.style.opacity = '0';
      setTimeout(() => alertSuccess.remove(), 500);
    }, 5000);
  }

});
