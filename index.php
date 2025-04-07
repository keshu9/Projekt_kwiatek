<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
  $_SESSION['logged_in'] = 'no';
};
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog podróżniczy</title>
  <link rel="stylesheet" href="style.css" />

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

    <div class="side-bar">
      <div>
        <h1 class="flaga-text">Blog o USA</h1>
        <?php
        if ($_SESSION['logged_in'] != 'yes') {
          echo '<div class="container-option">

          <div class="space">

          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>
          <span class="material-symbols-outlined">star </span>

          </div>
          
        <div class="container-option">
          <div class="option">
            <p><a href="rejestracja.php">Rejestracja</a></p>
          </div>

          <div class="option">
            <p><a href="login.php">Logowanie</a></p>
          </div>
        </div>
        </div>
        </div>
      </div>';
        } else {
          echo '<div class="container-option">
          <div class="option">
            <p><a href="ulubione.php">Ulubione</a></p>
          </div>
          </div>
          <div class="profile">
        <span class="material-symbols-outlined" id="profile-icon">account_circle </span>
        <a href="">' . $_SESSION['email'] . '</a>
      </div>
      </div>
    </div>';
        };
        ?>

        <main>
          <div class="mapa">

            <div id="map"></div>

            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            <script>
              const map = L.map('map', {
                dragging: false,
                touchZoom: false,
                scrollWheelZoom: false,
                doubleClickZoom: false,
                boxZoom: false,
                keyboard: false,
                zoomControl: false,
                tap: false
              }).setView([39.5, -98.35], 4);

              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
              }).addTo(map);
              fetch('zabytki_api.php').then(res => res.json()).then(data => {
                console.log(data)
                data.forEach(zabytek => {
                  const [lat, lng] = zabytek.koordynaty.split(',').map(Number);
                  const marker = L.marker([lat, lng]).addTo(map);
                  marker.bindPopup(`<b>${zabytek.nazwa_miejsca}</b><br><a href="${zabytek.zdjecie_miejsca}">Zobacz więcej</a>`);
                });
                map.invalidateSize();
              })
            </script>
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