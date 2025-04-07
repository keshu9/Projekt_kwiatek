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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0&icon_names=mail" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0&icon_names=call" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0&icon_names=location_on" />
</head>

<body>
  <div class="container">

    <div class="side-bar">
      <h1>blog</h1>
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