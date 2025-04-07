<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog podróżniczy</title>
  <link rel="stylesheet" href="ulubione.css" />

  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />


</head>

<body>
  <div class="container">
    <main>
        <h1>Ulubione</h1>
    </main>

    <footer class="footer">
        <div class="footer-column">
            <span class="material-symbols-outlined">
                location_on
            </span>
            <a class="icons">ADRES</a>
            <p>UL. BUDOWLANA 15<br>05-300 Mińsk Mazowiecki</p>
            </div>

            <div class="footer-column">
            <span class="material-symbols-outlined">
                call
            </span>
            <a class="icons">KONTAKT</a>
            <p>support@usablog.pl<br>+48 111 222 333</p>
            </div>

            <div class="footer-column">
            <span class="material-symbols-outlined">
                location_on
            </span>
            <a class="icons">NASZA STRONA</a>
            <p>O NAS<br>OPINIE</p>
        </div>
    </footer>
  </div>

  
</body>

</html>