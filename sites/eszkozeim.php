<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/design.css">
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
                    <a href="eszkozeim.php" class="nav-item active">Eszközeim</a>
                    <a href="tervek.php" class="nav-item ">Tervek</a>
                    <a href="linkek.php" class="nav-item">Hasznos linkek</a>
                    <a href="kapcsolatok.php" class="nav-item ">Kapcsolat</a>
                </ul>
      </nav>
</header>
    <main style="max-width: 600px; margin: 40px auto; background: rgba(30,30,30,0.95); border-radius: 16px; box-shadow: 0 0 16px #222; padding: 32px; color: #fff;">
        <h2 style="text-align:center; margin-bottom: 24px;">Eszközeim</h2>
        <div style="margin-bottom: 24px;">
            <h3 style="color:#00eaff;"><i class="fa-solid fa-mobile-button"></i> Telefon</h3>
            
            <ul style="list-style:none; padding-left:0;">
                <li><strong>Modell:</strong> iPhone 13 Pro</li>
            </ul>
        </div>
        <div style="margin-bottom: 24px;">
            <h3 style="color:#00eaff;"> <i class="fa-solid fa-laptop"></i> Laptop</h3>
           
            <ul style="list-style:none; padding-left:0;">
                <li><strong>Gyártó:</strong> MSI</li>
                <li><strong>CPU:</strong> Intel i5 12450H</li>
                <li><strong>GPU:</strong> RTX 2050</li>
                <li><strong>RAM:</strong> 16GB DDR4</li>
                <li><strong>Tárhely:</strong> 512GB SSD</li>
            </ul>
        </div>
        <div>
            <h3 style="color:#00eaff;"><i class="fa-solid fa-computer"></i> PC</h3>
            
            <ul style="list-style:none; padding-left:0;">
                <li><strong>CPU:</strong> Ryzen 5 4600G</li>
                <li><strong>GPU:</strong> Radeon 6600XT</li>
                <li><strong>RAM:</strong> 16GB DDR4</li>
                <li><strong>Tárhely:</strong> 1,5TB SSD</li>
            </ul>
        </div>
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