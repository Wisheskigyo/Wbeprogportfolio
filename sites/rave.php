<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/rave.css">
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
    <link rel="stylesheet" href="../css/rave.css">
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
                    <a href="rave.php" class="nav-item active">Hangár rave kultúra</a>
                    <a href="eszkozeim.php" class="nav-item ">Eszközeim</a>
                    <a href="tervek.php" class="nav-item ">Tervek</a>
                    <a href="linkek.php" class="nav-item">Hasznos linkek</a>
                    <a href="kapcsolatok.php" class="nav-item ">Kapcsolat</a>
            </ul>
        </div>
    </nav>
    </header>
    <div class="leiras-rave">
        <div class="rave-title">Rave Kultúra – A Modern Elektronikus Zenei Mozgalom</div>
        <div class="rave-wave"></div>
        <p style="text-align:center; font-size:1.15em; color:#C7C9CC; max-width:700px; margin:0 auto 32px auto;">A rave kultúra az elektronikus zene, a fények, a tánc és a közösségi élmény egyedülálló találkozása. A 80-as évek végén indult mozgalom mára világszerte elterjedt, és a fiatalok egyik legnépszerűbb szubkultúrájává vált.</p>
        <div class="rave-cards">
            <div class="rave-card">
                <span class="rave-icon">🎧</span>
                <h2>Zene & DJ-k</h2>
                A rave bulik középpontjában az elektronikus zene áll: techno, trance, drum & bass, house és sok más stílus. A DJ-k a hangulat mesterei, akik folyamatos mixeléssel tartják fent az energiát.
            </div>
            <div class="rave-card">
                <span class="rave-icon">🌈</span>
                <h2>Fények & Vizuál</h2>
                Lézerek, UV-fények, LED falak és vizuális effektek teszik felejthetetlenné az éjszakát. A látvány legalább annyira fontos, mint a zene.
            </div>
            <div class="rave-card">
                <span class="rave-icon">🤝</span>
                <h2>Közösség & Összetartás</h2>
                A rave szcéna alapja a befogadás, a tolerancia és a közös élmény. A "PLUR" (Peace, Love, Unity, Respect) filozófia minden résztvevő számára fontos.
            </div>
            <div class="rave-card">
                <span class="rave-icon">🕺</span>
                <h2>Tánc & Szabadság</h2>
                A tánc a rave bulik szerves része. Itt mindenki önmaga lehet, nincsenek kötöttségek, csak a zene és a mozgás öröme.
            </div>
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

        const hamburger = document.querySelector('.navbar-hamburger');
        const menu = document.querySelector('.navbar-menu');
        hamburger.addEventListener('click', () => {
            menu.classList.toggle('open');
        });
        </script>
    </div>
    
</footer>
</html>