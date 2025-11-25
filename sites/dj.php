<!doctype html>
<html lang="hu">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>DJ Prototype — Frosted Vinyl Theme</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
    
  <link rel="stylesheet" href="/css/dj.css" />
  <link rel="stylesheet" href="/assets/css/nav-override.css" />

  <!-- NOTE:
    - Place your uploaded background image as `image.png` next to this file.
    - Replace `sample.mp3` with a real audio file (same folder) to test the player.
  -->
</head>
<body>
    <div class="background-image"></div>
  <header class="site-header">


    <!-- Your original navbar markup preserved exactly as provided -->
    <nav>
      <ul>
        <a href="/index.php" class="nav-item ">Főoldal</a>
        <a href="/sites/portfolio.php" class="nav-item">Portfólió</a>
        <a href="/sites/dj.php" class="nav-item active">DJ Karrier</a>
        <a href="/sites/aboutme.php" class="nav-item">Oldal 4</a>
        <a href="/sites/aboutme.php" class="nav-item">Oldal 5</a>
        <a href="/sites/blog.php" class="nav-item">Oldal 6</a>
        <a href="/sites/services.php" class="nav-item">Oldal 7</a>
        <a href="/sites/contact.php" class="nav-item">Kapcsolat</a>
      </ul>
    </nav>
  </header>

  <main class="main">
    <!-- Decorative vinyl groove layers (parallax) -->
    <div class="bg-layer layer-back"></div>
    <div class="bg-layer layer-mid"></div>

    <!-- Hero frosted card -->
    <section class="hero">
      <div class="card hero-card" role="region" aria-label="Hero">
        <h1>Üdvözöllek a weboldalamon!</h1>
        <p>Itt megtalálsz pár hasznos információt rólam és munkásságaimról.</p>
        <div class="hero-ctas">
          <button class="btn-primary" id="playLatest">Hallgass most</button>
          <a href="#contact" class="btn-ghost">Fellépés foglalása</a>
        </div>
      </div>
    </section>

    <!-- Music grid -->
    <section id="music" class="section">
      <h2 class="section-title">Mixek & Repertoár</h2>
      <div class="grid">
        <article class="mix-card" tabindex="0" data-track="sample.mp3">
          <div class="cover" aria-hidden="true"></div>
          <div class="mix-meta">
            <div class="mix-title">Latest Set</div>
            <div class="mix-tags">House · Techno</div>
          </div>
          <button class="play-overlay" aria-label="Play Latest Set">▶</button>
        </article>

        <!-- Placeholder cards -->
        <article class="mix-card placeholder" tabindex="0" data-track="sample.mp3">
          <div class="cover"></div>
          <div class="mix-meta">
            <div class="mix-title">Set #2</div>
            <div class="mix-tags">Downtempo</div>
          </div>
          <button class="play-overlay" aria-label="Play Set #2">▶</button>
        </article>

        <article class="mix-card placeholder" tabindex="0" data-track="sample.mp3">
          <div class="cover"></div>
          <div class="mix-meta">
            <div class="mix-title">Set #3</div>
            <div class="mix-tags">Minimal</div>
          </div>
          <button class="play-overlay" aria-label="Play Set #3">▶</button>
        </article>
      </div>
    </section>

    <!-- Gigs -->
    <section id="gigs" class="section">
      <h2 class="section-title">Közelgő fellépések</h2>
      <div class="events">
        <div class="event-card card">
          <div class="event-date">2025-12-05</div>
          <div class="event-info">
            <h3>Club Night — Budapest</h3>
            <p>Venue: Sample Club • Tickets: <a href="#" target="_blank" rel="noopener">Buy</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact / Booking -->
    <section id="contact" class="section">
      <h2 class="section-title">Fellépés foglalása</h2>
      <form class="card booking" id="bookingForm">
        <label>Dátum<input type="date" name="date" required></label>
        <label>Helyszín<input type="text" name="venue" placeholder="Helyszín" required></label>
        <label>Várható létszám<input type="number" name="count" min="1" placeholder="Például: 150" required></label>
        <label>Költségkeret<input type="text" name="budget" placeholder="Költségkeret"></label>
        <label>Üzenet<textarea name="message" rows="4"></textarea></label>
        <div class="form-actions">
          <button type="submit" class="btn-primary">Küldés</button>
        </div>
        <div id="bookingStatus" aria-live="polite" class="status"></div>
      </form>
    </section>
  </main>

  <!-- Sticky Mini Player -->
  <aside class="mini-player" id="miniPlayer" aria-hidden="false" aria-label="Audio player">
    <div class="player-left">
      <img src="cover-placeholder.jpg" alt="Cover art" id="playerArt">
      <div class="player-meta">
        <div class="player-title" id="playerTitle">Not playing</div>
        <div class="player-artist" id="playerArtist">—</div>
      </div>
    </div>

    <div class="player-controls">
      <button id="btnPrev" class="control" aria-label="Previous">⏮</button>
      <button id="btnPlay" class="control" aria-label="Play" aria-pressed="false">▶</button>
      <button id="btnNext" class="control" aria-label="Next">⏭</button>
      <div class="progress-wrap" aria-hidden="false">
        <input type="range" id="progress" value="0" min="0" max="100" step="0.1" aria-label="Progress">
      </div>
      <button id="expandPlayer" class="control" aria-label="Expand player">⤢</button>
    </div>

    <audio id="audio" preload="metadata">
      <source src="sample.mp3" type="audio/mpeg">
      <!-- Replace sample.mp3 with your real audio file -->
      Your browser does not support the audio element.
    </audio>
  </aside>

  <script src="app.js"></script>
</body>
</html>