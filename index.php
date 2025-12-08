<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/design.css">
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
                    <a href="index.php" class="nav-item active">Főoldal</a>
                    <a href="sites/portfolio.php" class="nav-item ">Portfólió</a>
                    <a href="sites/dj.php" class="nav-item ">DJ</a>
                    <a href="sites/rave.php" class="nav-item ">Hangár rave kultúra</a>
                    <a href="sites/eszkozeim.php" class="nav-item ">Eszközeim</a>
                    <a href="sites/tervek.php" class="nav-item ">Tervek</a>
                    <a href="sites/linkek.php" class="nav-item">Hasznos linkek</a>
                    <a href="sites/kapcsolatok.php" class="nav-item ">Kapcsolat</a>
            </ul>
        </div>
    </nav>

<div class="leiras" >
    <div class="rave-cards1">
        <div class="rave-card1">
            Üdvözöllek a weboldalamon!
            Itt megtalálsz pár hasznos információt rólam és munkásságaimról.
        </div>
    </div>
</div>
<div class="leiras" >
    <div class="rave-cards1">
        <div class="rave-card1" id="portfolio-anim">
            <a href="sites/portfolio.php" class="portfolio-btn">Kezdésnek nézd meg a portfóliómat!</a>
        </div>
    </div>
</div>


</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const animDiv = document.getElementById('portfolio-anim');
    animDiv.addEventListener('mouseenter', function() {
        animDiv.classList.add('animate__animated', 'animate__bounce');
    });
    animDiv.addEventListener('animationend', function() {
        animDiv.classList.remove('animate__animated', 'animate__bounce');
    });
});
</script>
<footer style="position: fixed; bottom: 0; width: 100%;">
    <div style="display: flex; justify-content: space-between; align-items: center; background-color: black; color: white; padding: 10px;">
        <span style="text-align: left;">&copy; 2025 Hegedűs Levente. Minden jog fenntartva.</span>
        <span style="text-align: right;" id="datetime"><?php include 'ora.php'; ?></span>
        <script>
        function updateDateTime() {
            fetch('ora.php')
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