<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/design.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta charset="UTF-8">
    <title>Hegedűs Levente Webprogramozás</title>
    <style>
    body {
    min-height: 100vh;
    background-image: url('../source/background.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;  
    }
     
    </style>
    <meta name="author" content="Hegedűs Levente">
    <meta name="description" content="Hegedűs Levente portfóliója: front end fejlesztő, készségek, tapasztalatok, elérhetőségek.">
    <meta name="robots" content="index, follow">
</head>
<body>
<nav>
    <ul>
        <a href="/index.php" class="nav-item active">Főoldal</a>
        <a href="/sites/portfolio.php" class="nav-item">Portfólió</a>
        <a href="/sites/dj.php" class="nav-item">DJ Karrier</a>
        <a href="/sites/aboutme.php" class="nav-item">Oldal 4</a>
        <a href="/sites/aboutme.php" class="nav-item">Oldal 5</a>
        <a href="/sites/blog.php" class="nav-item">Oldal 6</a>
        <a href="/sites/services.php" class="nav-item">Oldal 7</a>
        <a href="/sites/contact.php" class="nav-item">Kapcsolat</a>
    </ul>
</nav>
<div class="leiras" ;>
    Üdvözöllek a weboldalamon!
    <p>Itt megtalálsz pár hasznos információt rólam és munkásságaimról.</p>
</div>
<div class="leiras" style="display: flex; justify-content: center; align-items: center;">
    <div id="portfolio-anim">
        <a href="portfolio.php" class="portfolio-btn">Kezdésnek nézd meg a portfóliómat!</a>
    </div>
</div>
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


</body>
<footer style="position: fixed; bottom: 0; width: 100%;">
    <div style="display: flex; justify-content: space-between; align-items: center; background-color: black; color: white; padding: 10px;">
        <span style="text-align: left;">&copy; 2025 Hegedűs Levente. Minden jog fenntartva.</span>
        <span style="text-align: right;" id="datetime"><?php include '/ora.php'; ?></span>
        <script>
        function updateDateTime() {
            fetch('/ora.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('datetime').innerHTML = data;
            });
        }
        setInterval(updateDateTime, 1);
        </script>
    </div>
    
</footer>
</html>
