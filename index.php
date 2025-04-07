<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog podróżniczy</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <!-- Lewy panel (menu) -->
    <aside class="sidebar">
      <h1>Blog</h1>
      <nav>
        <a href="#">Rejestracja</a>
        <a href="#">Ulubione</a>
      </nav>
    </aside>

    <!-- Główna zawartość -->
    <main class="content">
      <!-- Mapka -->
      <div class="map">
        <img src="mapa-polski.png" alt="Mapa Polski z pinezkami" />
      </div>

      <!-- Atrakcje -->
      <div class="place">
        <img src="palac.jpg" alt="Pałac kultury" />
        <div class="desc">
          <h3>Pałac kultury i nauki</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <div class="favorite">⭐</div>
      </div>

      <div class="place">
        <img src="lazienki.jpg" alt="Łazienki Królewskie" />
        <div class="desc">
          <h3>Łazienki królewskie</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <div class="favorite">⭐</div>
      </div>

      <div class="place">
        <img src="muzeum.jpg" alt="Muzeum powstania" />
        <div class="desc">
          <h3>Muzeum powstania warszawskiego</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <div class="favorite selected">⭐</div>
      </div>
    </main>
  </div>
</body>

</html>