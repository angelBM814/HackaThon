<?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa con Latitud y Longitud en Marcadores</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

        #returnBtn {
            margin: 10px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="../PHP/registroProv.php" method="post" id="prove">
    <input type="hidden" name="lat" id="lat">
    <input type="hidden" name="lng" id="lng">
    <!-- Otros campos de tu formulario -->
    <input class="btn" type="submit" value="Registrarme">
</form>

    <h1>Tu Ubicación en el Mapa</h1>
    <button id="returnBtn">Regresar a mi Ubicación</button>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Inicializar el mapa
        const map = L.map('map').setView([40.7128, -74.0060], 12); // Centrar en Nueva York

        // Capa de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        let userLocation; // Variable para almacenar la ubicación del usuario

        // Array de marcadores (coordenadas y nombres)
        const markers = [
            { coords: [40.7128, -74.0060], name: 'Marcador 1' }, // Nueva York
            { coords: [40.730610, -73.935242], name: 'Marcador 2' }, // Otro lugar en Nueva York
            { coords: [40.650002, -73.949997], name: 'Marcador 3' }  // Otro lugar en Nueva York
        ];

        // Añadir marcadores al mapa
        markers.forEach(marker => {
            L.marker(marker.coords).addTo(map)
                .bindPopup(`${marker.name}<br>Latitud: ${marker.coords[0]}<br>Longitud: ${marker.coords[1]}`);
        });

        // Función para mostrar la ubicación del usuario
        function showPosition(position) {
            userLocation = [position.coords.latitude, position.coords.longitude];
            map.setView(userLocation, 15); // Centrar en la ubicación del usuario
            L.marker(userLocation).addTo(map)
                .bindPopup('Estás aquí<br>Latitud: ' + userLocation[0] + '<br>Longitud: ' + userLocation[1])
                .openPopup();

            // Actualizar la URL con las coordenadas
            updateURL(userLocation[0], userLocation[1]);
        }

        // Manejar errores de geolocalización
        function handleError() {
            alert("No se pudo obtener la ubicación. Asegúrate de que el GPS esté habilitado.");
        }

        // Intentar obtener la ubicación del usuario
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, handleError);
        } else {
            alert("Geolocalización no soportada por este navegador.");
        }

        // Función para regresar a la ubicación del usuario
        document.getElementById('returnBtn').onclick = function () {
            if (userLocation) {
                map.setView(userLocation, 15); // Centrar en la ubicación del usuario
            } else {
                alert("La ubicación del usuario no está disponible.");
            }
        };

        const markers2 = [];

        // Función para añadir marcadores
        function addMarker(e) {
    const name = prompt("Introduce el nombre del marcador:");
    if (name) {
        const lat = e.latlng.lat;
        const lng = e.latlng.lng;

        // Asignar latitud y longitud a los campos ocultos
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;

        const marker = L.marker(e.latlng).addTo(map);
        marker.bindPopup(`<strong>${name}</strong><br>Lat: ${lat}<br>Lng: ${lng}<br><button onclick="removeMarker(${markers2.length})">Eliminar</button>`).openPopup();
        markers2.push({ marker, lat, lng });
        console.log(`Marcador añadido: ${name}, Lat: ${lat}, Lng: ${lng}`);

        // Enviar el formulario automáticamente
        document.getElementById('prove').submit();
    }
}


        // Función para eliminar un marcador
        function removeMarker(index) {
            const { marker } = markers2[index];
            map.removeLayer(marker);
            markers2.splice(index, 1);
        }

        // Escuchar el evento de clic en el mapa
        map.on('click', addMarker);

        // Función para actualizar la URL
        function updateURL(lat, lng) {
    const url = new URL(window.location.href);
    url.searchParams.set('lat', lat);
    url.searchParams.set('lng', lng);
    console.log(`Updating URL with lat: ${lat}, lng: ${lng}`); // Debugging statement
    window.history.pushState({}, '', url);
}


    </script>
</body>

</html>