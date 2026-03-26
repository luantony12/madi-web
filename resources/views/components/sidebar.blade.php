<nav id="sidebar">
  <a href="{{ route('home') }}" class="sidebar-logo">MADI</a>

  <a href="#hero"      class="nav-item active" data-label="Inicio">   <i class="bi bi-house"></i></a>
  <a href="#nosotros"  class="nav-item"         data-label="Nosotros"> <i class="bi bi-building"></i></a>
  <a href="#servicios" class="nav-item"         data-label="Servicios"><i class="bi bi-tools"></i></a>
  <a href="#proyectos" class="nav-item"         data-label="Proyectos"><i class="bi bi-grid"></i></a>
  <a href="#proceso"   class="nav-item"         data-label="Proceso">  <i class="bi bi-diagram-3"></i></a>
  <a href="#contacto"  class="nav-item"         data-label="Contacto"> <i class="bi bi-envelope"></i></a>

  <div class="sidebar-spacer"></div>
  <div class="sidebar-divider"></div>

  <button id="themeToggle" class="nav-item" data-label="Cambiar tema">
    <i class="bi bi-palette"></i>
  </button>
</nav>

{{-- Panel FUERA del nav --}}
<div id="themePanel" class="theme-panel">
  <div class="theme-panel-title">Tema de color</div>

  <div class="theme-option selected" data-theme="gold">
    <div class="swatches">
      <span class="swatch" style="background:#C9A84C"></span>
      <span class="swatch" style="background:#22467a"></span>
      <span class="swatch" style="background:#0D1A2E"></span>
    </div>
    <div class="theme-text">
      <strong>Acero & Oro</strong>
      <small>Azul navy + dorado</small>
    </div>
    <span class="theme-check"><i class="bi bi-check-lg"></i></span>
  </div>

  <div class="theme-option" data-theme="orange">
    <div class="swatches">
      <span class="swatch" style="background:#E8630A"></span>
      <span class="swatch" style="background:#22467a"></span>
      <span class="swatch" style="background:#0D1A2E"></span>
    </div>
    <div class="theme-text">
      <strong>Azul & Naranja</strong>
      <small>Azul navy + naranja</small>
    </div>
    <span class="theme-check"><i class="bi bi-check-lg"></i></span>
  </div>

  <div class="theme-option" data-theme="silver">
    <div class="swatches">
      <span class="swatch" style="background:#A8C0D6"></span>
      <span class="swatch" style="background:#22467a"></span>
      <span class="swatch" style="background:#0D1A2E"></span>
    </div>
    <div class="theme-text">
      <strong>Azul & Plateado</strong>
      <small>Azul navy + plateado</small>
    </div>
    <span class="theme-check"><i class="bi bi-check-lg"></i></span>
  </div>
 
  <div class="theme-option" data-theme="green">
    <div class="swatches">
      <span class="swatch" style="background:#2E7D4F"></span>
      <span class="swatch" style="background:#1A3A2A"></span>
      <span class="swatch" style="background:#0A1A10"></span>
    </div>
    <div class="theme-text">
      <strong>Verde & Dorado</strong>
      <small>Bosque + acento dorado</small>
    </div>
    <span class="theme-check"><i class="bi bi-check-lg"></i></span>
  </div>

</div>