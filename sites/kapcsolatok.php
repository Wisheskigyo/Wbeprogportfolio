<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/kapcsolat.css">
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
      <nav>
                
                <ul>
                    <a href="../index.php" class="nav-item ">Főoldal</a>
                    <a href="portfolio.php" class="nav-item ">Portfólió</a>
                    <a href="dj.php" class="nav-item ">DJ</a>
                    <a href="rave.php" class="nav-item ">Hangár rave kultúra</a>
                    <a href="eszkozeim.php" class="nav-item ">Eszközeim</a>
                    <a href="tervek.php" class="nav-item ">Tervek</a>
                    <a href="linkek.php" class="nav-item">Hasznos linkek</a>
                    <a href="kapcsolatok.php" class="nav-item active">Kapcsolat</a>
                </ul>
      </nav>
</header>
<main class="links-main">
        <h1 class="links-title">Vedd fel velem a kapcsolatot az alábbi linkeken:</h1>
        <ul class="links-list">
            <li>
                <a href="https://www.facebook.com/levente.hegedus.165928/" target="_blank" class="link-item">
                    <i class="fa-brands fa-facebook" "></i>
                    Facebook
                </a>
            </li>
            <li>
                <a href="https://github.com/Wisheskigyo" target="_blank" class="link-item">
                    <i class="fab fa-github"></i>
                    GitHub
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/_dj.lexx_/" target="_blank" class="link-item">
                    <i class="fab fa-instagram"></i>
                    Instagram
                </a>
            </li>
            <li>
                <a href="https://discordapp.com/users/525395276500828180" target="_blank" class="link-item">
                   <i class="fa-brands fa-discord"></i>
                    Discord
                </a>
            </li>
        </ul>
    </main>
</body>
 <footer style=" bottom: 0; width: 100%; position: fixed;">
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