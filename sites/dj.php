<!doctype html>
<html lang="hu">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hegedus Levenete Webprogramozás</title>   
  <link rel="stylesheet" href="../css/dj.css" />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="background-image"></div>
<header class="site-header">
     <nav class="navbar">
        <div class="navbar-left">
                Menü
        </div>
        <div class="navbar-right">
            <button class="navbar-hamburger" aria-label="Menü megnyitása">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="navbar-menu">
            <ul>
                      <a href="../index.php" class="nav-item ">Főoldal</a>
                    <a href="portfolio.php" class="nav-item ">Portfólió</a>
                    <a href="dj.php" class="nav-item active">DJ</a>
                    <a href="rave.php" class="nav-item ">Hangár rave kultúra</a>
                    <a href="eszkozeim.php" class="nav-item ">Eszközeim</a>
                    <a href="tervek.php" class="nav-item ">Tervek</a>
                    <a href="linkek.php" class="nav-item">Hasznos linkek</a>
                    <a href="kapcsolatok.php" class="nav-item ">Kapcsolat</a>
            </ul>
        </div>
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
    <article class="mix-card" tabindex="0"
             data-src="/music/music3.wav"
             data-art="/source/indu.jpg"
             data-title="Industrial"
             data-artist="Live Mix">
      <div class="cover" style="background-image:url('/source/indu.jpg')" aria-hidden="true"></div>
      <div class="mix-meta">
        <div class="mix-title">Industrial</div>
        <div class="mix-tags">Industrial · Techno</div>
      </div>
      <button class="play-overlay" aria-label="Play Industrial">▶</button>
    </article>

    <article class="mix-card" tabindex="0"
             data-src="/music/music1.wav"
             data-art="/source/house.jpg"
             data-title="Avicii x Fake ID"
             data-artist="Edit / Mashup">
      <div class="cover" style="background-image:url('/source/house.jpg')" aria-hidden="true"></div>
      <div class="mix-meta">
        <div class="mix-title">Avicii x Fake ID</div>
        <div class="mix-tags">House · Bootleg</div>
      </div>
      <button class="play-overlay" aria-label="Play Avicii x Fake ID">▶</button>
    </article>

    <article class="mix-card" tabindex="0"
             data-src="/music/music2.wav"
             data-art="/source/balkan.png"
             data-title="02CKE BEOGRADSKE"
             data-artist="Balkan Set">
      <div class="cover" style="background-image:url('/source/balkan.png')" aria-hidden="true"></div>
      <div class="mix-meta">
        <div class="mix-title">CKE BEOGRADSKE</div>
        <div class="mix-tags">Balkan · World</div>
      </div>
      <button class="play-overlay" aria-label="Play 02CKE BEOGRADSKE">▶</button>
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
        <div class="event-card card">
          <div class="event-date">2025-12-06</div>
          <div class="event-info">
            <h3>Hungi — Szeged</h3>
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
      <source src="/music/industrial.wav" type="audio/wav">
      <!-- Replace sample.mp3 with your real audio file -->
      Your browser does not support the audio element.
    </audio>
  </aside>
<footer style="position: fixed; bottom: 0; width: 100%;">
    <div style="display: flex; justify-content: space-between; align-items: center; background-color: black; color: white; padding: 10px;">
        <span style="text-align: left;">&copy; 2025 Hegedűs Levente. Minden jog fenntartva.</span>
        <span style="text-align: right;" id="datetime"><?php include '../ora.php'; ?></span>
        <script>
        function updateDateTime() {
            fetch('../ora.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('datetime').innerHTML = data;
            });
        }
        setInterval(updateDateTime, 1000);

        const hamburger = document.querySelector('.navbar-hamburger');
        const menu = document.querySelector('.navbar-menu');
        hamburger.addEventListener('click', () => {
            menu.classList.toggle('open');
        });
        </script>
    </div>
    
</footer>
</body>
</html>