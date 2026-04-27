<section id="servicios">
  <div class="section-header">
    <div class="section-tag">Lo que Hacemos</div>
    <h2 class="section-title">NUESTROS<br>SERVICIOS</h2>
    <div class="gold-line"></div>
  </div>

  <div class="services-grid">
    @foreach($services as $service)
      <div class="service-card">
        <span class="service-num">{{ $service['num'] }}</span>
        <div class="service-icon"><i class="bi {{ $service['icon'] }}"></i></div>
        <h3>{{ $service['title'] }}</h3>
        <p>{{ $service['desc'] }}</p>

        @if(!empty($service['items']))
          <ul class="service-list">
            @foreach($service['items'] as $label => $detail)
              <li>
                <div class="service-list-check">
                  <i class="bi bi-check-lg"></i>
                </div>
                <div class="service-list-text">
                  <strong>{{ $label }}</strong>
                  {{ $detail }}
                </div>
              </li>
            @endforeach
          </ul>
        @endif
      </div>
    @endforeach
  </div>
</section>
