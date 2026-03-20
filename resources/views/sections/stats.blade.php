<section id="stats">
  <div class="stats-grid">
    @foreach($stats as $stat)
      <div class="stat-item">
        <div class="stat-num">{{ $stat['num'] }}</div>
        <div class="stat-label">{{ $stat['label'] }}</div>
      </div>
    @endforeach
  </div>
</section>
