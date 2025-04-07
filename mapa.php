<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Mapa zabytków USA</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
            margin: 0 auto;
        }

        body {
            font-family: sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Mapa zabytków w USA</h1>
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
            zoomControl: false, // ukrywa przyciski +/-
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
        })
    </script>

</body>

</html>
📄 Przykładowa podstrona: zabytek1.html
html
Kopiuj
Edytuj
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Statua Wolności</title>
</head>

<body>
    <h1>Statua Wolności</h1>
    <p>To jeden z najbardziej rozpoznawalnych zabytków w USA, zlokalizowany w Nowym Jorku.</p>
    <a href="mapa.html">← Powrót do mapy</a>
</body>

</html>