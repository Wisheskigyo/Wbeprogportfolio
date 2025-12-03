<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Hegedűs Levente Webprogramozás</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Hegedűs Levente">
    <meta name="description" content="Hegedűs Levente portfóliója: front end fejlesztő, készségek, tapasztalatok, elérhetőségek.">
    <meta name="robots" content="index, follow">
</head>
<body>
  <div class="background-image"></div>
     <header class="site-header">
      <nav>
        
        <ul>
          <a href="../index.php" class="nav-item ">Főoldal</a>
          <a href="portfolio.php" class="nav-item active">Portfólió</a>
          <a href="dj.php" class="nav-item ">DJ</a>
          <a href="rave.php" class="nav-item">Hangár rave kultúra</a>
          <a href="eszkozeim.php" class="nav-item">Eszközeim</a>
          <a href="tervek.php" class="nav-item">Tervek</a>
          <a href="linkek.php" class="nav-item">Hasznos linkek</a>
          <a href="kapcsolatok.php" class="nav-item">Kapcsolat</a>
        </ul>
      </nav>
     </header>
    
    <!-- Decorative vinyl groove layers (parallax) -->
    <div class="bg-layer layer-back"></div>
    <div class="bg-layer layer-mid"></div>
    <div class="wrap">
        <div class="card">
          <aside class="sidebar">
            <div class="profile-pic-container">
                <img src="../source/Levi.jpg" alt="Hegedűs Levente" class="profile-pic">
            </div>
            <h1 class="name">Hegedűs Levente</h1>
            <div class="subtitle">Front end fejlesztő</div>
        
            <div class="item contact">
              <span class="label">E-mail</span>
              <div class="value"><a href="mailto:leventehegedus33@gmail.com">leventehegedus33@gmail.com</a></div>
            </div>
        
            <div class="item">
              <span class="label">Telefon</span>
              <div class="value">0631807471</div>
            </div>
        
            <div class="item">
              <span class="label">Cím</span>
              <div class="value">Ohridska 9c, 24400 Zenta</div>
            </div>
        
            <div class="item">
              <span class="label">Személyes</span>
              <div class="value">2005. október 24. <br> Jogosítvány: B <br> Nem: Férfi</div>
            </div>
        
            <div class="item">
              <h3>Készségek</h3>
              <div class="skills">
                <span class="skill">HTML<div class="percent"><div class="bar" style="width:90%"></div></div></span>
                <span class="skill">CSS<div class="percent"><div class="bar" style="width:90%"></div></div></span>
                <span class="skill">JavaScript / React<div class="percent"><div class="bar" style="width:40%"></div></div></span>
                <span class="skill">Videószerkesztés<div class="percent"><div class="bar" style="width:70%"></div></div></span>
              </div>
            </div>
        
            <div class="item">
              <h3>Hobbik</h3>
              <div class="value">DJ</div>
            </div>
        
            <div class="item">
              <h3>Nyelvek</h3>
              <div class="value">
                <span class="skill">Magyar<div class="percent"><div class="bar" style="width:100%"></div></div></span>
                <span class="skill">Angol<div class="percent"><div class="bar" style="width:85%"></div></div></span>
                <span class="skill">Szerb<div class="percent"><div class="bar" style="width: 35%"></div></div></span>
              </div>
            </div>
        
          </aside>
        
          <main class="main">
            <section class="section">
              <h3>Rövid bemutatkozás</h3>
              <p>Front end fejlesztő, egyenlőre nem sok tapasztalat React projektekben. Erős HTML, CSS alapok. Szakmai figyelem a felhasználói felületre. Gyors alkalmazkodás csapatban.</p>
            </section>
        
            <section class="section">
              <h3>Foglalkoztatás</h3>
              <div class="list">
                <div>
                  <div class="role">Front end fejlesztő, PartyVibes</div>
                  <div class="meta">2025 - jelen</div>
                  <p>Feladatok: weboldal fejlesztés, UI komponensek, reszponzív tervezés.</p>
                </div>
              </div>
            </section>
        
            <section class="section">
              <h3>Végzettség</h3>
              <div class="list">
                <div>
                  <div class="role">Informatikus, Bolyai Tehetséggondozó Gimnázium, Zenta</div>
                  <div class="meta">2020 - 2024</div>
                  <p>Gimnáziumi informatika tanulmányok, gyakorlati projektek webes fejlesztés területén.</p>
                </div>
              </div>
            </section>
        
            <section class="section">
              <h3>Referenciák</h3>
              <p>Referenciák kérésre elérhetők. Hozzájárulok személyes adataim feldolgozásához a megpályázott munkakör betöltéséhez szükséges mértékben.</p>
            </section>
        
            <footer>
              <div>Elérhető: leventehegedus33@gmail.com</div>
            </footer>
          </main>
        </div>
      </div>
    </body>
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
        </script>
    </div>
    
</footer>
    </html>