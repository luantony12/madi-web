<section id="proceso">
  <div class="section-header" style="text-align:center;">
    <div class="section-tag" style="justify-content:center;">Metodología</div>
    <h2 class="section-title">NUESTRO<br>PROCESO</h2>
    <div class="gold-line" style="margin:16px auto 0;"></div>
  </div>

  <div class="process-steps">
    @foreach($process as $step)
      <div class="process-step">
        <div class="step-num">{{ $step['num'] }}</div>
        <h4>{{ $step['title'] }}</h4>
        <p>{{ $step['desc'] }}</p>
      </div>
    @endforeach
  </div>
</section>
