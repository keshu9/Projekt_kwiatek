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
    <div class="mapa">
    <!-- Wersja uproszczona SVG mapy USA - tylko kilka stanów jako przykład -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 959 593" width="100%">
      <!-- Przykladowe stany -->
      <path id="TX" d="M447.9,423.3L448,426.7L445,428.5L444.6,423.4Z" />
      <path id="CA" d="M160.7,389.9L162.1,392.5L164.2,390.3L162.9,386.9Z" />
      <path id="FL" d="M748.3,489.4L750.6,491.7L752.1,489.1L749.4,486.8Z" />
      <!-- Dodaj więcej stanów według potrzeb -->
    </svg>
  </div>
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