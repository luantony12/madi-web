<section id="proyectos">
  <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:48px; flex-wrap:wrap; gap:24px;">
    <div>
      <div class="section-tag">Portafolio</div>
      <h2 class="section-title">NUESTRAS<br>OBRAS</h2>
      <div class="gold-line"></div>
    </div>
    <div class="projects-filters">
      <button class="filter-btn active" data-filter="all">Todos</button>
      <button class="filter-btn" data-filter="Residencial">Residencial</button>
      <button class="filter-btn" data-filter="Comercial">Comercial</button>
      <button class="filter-btn" data-filter="Industrial">Industrial</button>
    </div>
  </div>

  <div class="projects-grid">
    @foreach($projects as $project)
      <div class="project-card {{ $project['featured'] ? 'featured' : '' }}"
           data-category="{{ $project['category'] }}">
        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
        <div class="project-overlay">
          <div class="project-info">
            <span>{{ $project['category'] }} · {{ $project['year'] }}</span>
            <h4>{{ $project['title'] }}</h4>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>
