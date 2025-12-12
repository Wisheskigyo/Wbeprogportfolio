<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/link.css"/>
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
                    <a href="tervek.php" class="nav-item ">Tervek</a>
                    <a href="linkek.php" class="nav-item active">Hasznos linkek</a>
                    <a href="kapcsolatok.php" class="nav-item ">Kapcsolat</a>
            </ul>
        </div>
    </nav>
     </header>
    <div class="leiras">
        <div class="rave-title">Hasznos linkek</div>
        <div class="rave-cards1">
            <div class="rave-card1">
                <a href="https://www.w3schools.com/" target="_blank" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;">
                    <img src="../source/logos/W3Schools_logo.svg.png" alt="W3Schools logó" style="height:32px; width:auto; vertical-align:middle;">
                    <span>W3Schools - Webfejlesztési oktatóanyagok              </span>
                </a>
            </div>
            <div class="rave-card1">
                <a href="https://developer.mozilla.org/" target="_blank" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;">
                    <img src="../source/logos/mdnlogo.png" alt="MDN logó" style="height:32px; width:auto; vertical-align:middle;">
                    <span>MDN Web Docs - Részletes dokumentáció webfejlesztőknek</span>
                </a>
            </div>
            <div class="rave-card1">
                <a href="https://css-tricks.com/" target="_blank" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;">
                    <img src="../source/logos/csstricks.png" alt="CSS-Tricks logó" style="height:32px; width:auto; vertical-align:middle;">
                    <span>CSS-Tricks - CSS tippek és trükkök                     </span>
                </a>
            </div>
            <div class="rave-card1">
                <a href="https://stackoverflow.com/" target="_blank" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: inherit;">
                    <img src="../source/logos/stackoverflow.png" alt="Stack Overflow logó" style="height:32px; width:auto; vertical-align:middle;">
                    <span>Stack Overflow - Közösségi kérdések és válaszok programozóknak</span>
                </a>
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