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
      </div>
    @endforeach
  </div>
</section>
