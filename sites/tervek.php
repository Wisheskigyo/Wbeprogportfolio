<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta charset="UTF-8">
    <title>Hegedűs Levente Webprogramozás</title>
    <style>
  
    </style>
    <meta name="author" content="Hegedűs Levente">
    <meta name="description" content="Hegedűs Levente portfóliója: front end fejlesztő, készségek, tapasztalatok, elérhetőségek.">
    <meta name="robots" content="index, follow">

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
                    <a href="dj.php" class="nav-item ">DJ</a>
                    <a href="rave.php" class="nav-item ">Hangár rave kultúra</a>
                    <a href="eszkozeim.php" class="nav-item ">Eszközeim</a>
                    <a href="tervek.php" class="nav-item active">Tervek</a>
                    <a href="linkek.php" class="nav-item">Hasznos linkek</a>
                    <a href="kapcsolatok.php" class="nav-item ">Kapcsolat</a>
            </ul>
        </div>
    </nav>
</header>
  
  <main style="max-width: 650px; margin: 40px auto; background: rgba(30,30,30,0.95); border-radius: 16px; box-shadow: 0 0 16px #222; padding: 32px; color: #fff;">
    <h2 style="text-align:center; margin-bottom: 24px;">Terv:PartyVibes: Vajdasági Bulikereső és Jegyvásárló Oldal</h2>
    <section style="margin-bottom: 24px;">
      <h3 style="color:#00eaff;">Cél</h3>
      <p>A weboldal célja, hogy a vajdasági bulikba való bejutást és a bulik keresését kényelmesebbé tegye. Az oldal segít a felhasználóknak megtalálni a legjobb eseményeket, információkat kapni a bulikról, és akár online jegyet is vásárolni.</p>
    </section>
    <section style="margin-bottom: 24px;">
      <h3 style="color:#00eaff;">Fő funkciók (terv)</h3>
      <ul style="list-style:none; padding-left:0;">
        <li><strong>Bulik keresése:</strong> Események listázása, szűrés hely, időpont, zenei stílus szerint.</li>
        <li><strong>Online jegyvásárlás:</strong> Kényelmes, biztonságos jegyvásárlási lehetőség regisztrációval vagy anélkül.</li>
        <li><strong>Részletes buli információk:</strong> Helyszín, fellépők, jegyárak, leírás, galéria.</li>
        <li><strong>Felhasználói profil:</strong> Saját jegyek, kedvenc bulik, értesítések.</li>
        <li><strong>Mobilbarát felület:</strong> Egyszerű használat telefonról is.</li>
      </ul>
    </section>
    <section>
      <h3 style="color:#00eaff;">Fontos megjegyzés</h3>
      <p>Az itt leírtak csak információs célt szolgálnak, jelenleg nem működő szolgáltatások! A weboldal fejlesztése terv szintjén van.</p>
    </section>
  </main>
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

        const hamburger = document.querySelector('.navbar-hamburger');
        const menu = document.querySelector('.navbar-menu');
        hamburger.addEventListener('click', () => {
            menu.classList.toggle('open');
        });
        </script>
    </div>
    
</footer>
</html>