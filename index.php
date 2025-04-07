<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog podróżniczy</title>
  <link rel="stylesheet" href="style.css"/>

  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">


</head>
<body>
  <div class="container">

    <div class="side-bar">
      <div>
        <h1 class="flaga-text">Blog o USA</h1>

        <div class="container-option">
          <div class="option">
            <p><a href="">Rejestracja</a></p>
          </div>

          <div class="option">
            <p><a href="">Logowanie</a></p>
          </div>
        </div>
      </div>
      
      <div class="profile">
        <span class="material-symbols-outlined" id="profile-icon">account_circle </span>
        <a href="">Zaloguj się</a>
      </div>
    </div>

    <main>
      <h1>mapa</h1>
    </main>
    
  </div>

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
</body>

</html>