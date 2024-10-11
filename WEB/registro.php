<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="text/css" href="../IMG/logo.jpeg">
    <script src="../JS/registroWeb.js"></script>
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/registro.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>Registro</title>
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

<body onload="forms()">
    <header>
        <div class="header">
            <div class="logo">
                <img src="../IMG/logo.jpeg" alt="">
            </div>
            <div class="lista">
                <ul>
                    <li class="inicio">Inicio</li>
                    <li>Servicios</li>
                    <li>Terminos y condiciones</li>
                </ul>
            </div>
            <div class="butttons">
                <button onclick="location.href='inicioSesion.php'" class="sesion">Iniciar sesión</button>
            </div>
        </div>
    </header>
    <section>
        <form action="../PHP/registroClie.php" method="post" id="cliente">
            <div class="form">
                <div class="tipo">
                    <select name="tipo" id="type" onchange="mostrar()">
                        <option value="sele" hidden>Seleccionar</option>
                        <option value="Proveedor">Proveedor</option>
                        <option value="Cliente">Cliente</option>
                    </select>
                </div>
                <div class="datos">
                    <h3>Cliente</h3>
                    <input name="nameCli" type="text" placeholder="Nombre" required>
                    <input name="mailCli" type="text" placeholder="Correo" required>
                    <input name="nTCli" type="text" placeholder="Número de Teléfono" required>
                    <input name="contrCli" type="password" placeholder="Contraseña" required>
                </div>
                <input class="btn" type="submit" value="Registrarme">
            </div>
        </form>

        <div class="All">
            <form action="../PHP/registroProv.php" id="prove" method="post">
                <div class="form">
                    <div class="tipo">
                        <select name="tipo" id="type2" onchange="mostrar2()">
                            <option value="sele" hidden>Seleccionar</option>
                            <option value="Proveedor">Proveedor</option>
                            <option value="Cliente">Cliente</option>
                        </select>
                    </div>
                    <div class="datos">
                        <h3>Proveedor</h3>
                        <input name="marca" type="text" placeholder="Marca" required>
                        <input name="correo" type="text" placeholder="Correo" required>
                        <input name="direccion" type="text" placeholder="Dirección" required>
                        <input name="numcel" type="text" placeholder="Número de Teléfono" required>
                        <input name="pass" type="password" placeholder="Contraseña" required>
                        <label for="">Descripción de tu marca</label>
                        <textarea name="descrip" required></textarea>
                        <select name="categoria" required>
                            <option value="" hidden>Categoría</option>
                            <option value="Electrica">Eléctrica</option>
                            <option value="Informatica">Informática</option>
                            <option value="Plomeria">Plomería</option>
                            <option value="Cuidados">Cuidados</option>
                            <option value="Otros">Otros</option>
                        </select>
                        <input class="btn" type="submit" value="Registrarme">
                    </div>
                </div>
            </form>

            <div id="mapa">
                <h1>Tu Ubicación en el Mapa</h1>
                <button id="returnBtn">Regresar a mi Ubicación</button>
                <div id="map"></div>

                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                <script>
                    // Inicializar el mapa
                    const map = L.map('map').setView([40.7128, -74.0060], 12);

                    // Capa de OpenStreetMap
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '© OpenStreetMap'
                    }).addTo(map);

                    let userLocation;

                    // Añadir marcadores (puedes eliminar esto si no es necesario)
                    const markers = [
                        { coords: [40.7128, -74.0060], name: 'Marcador 1' },
                        { coords: [40.730610, -73.935242], name: 'Marcador 2' },
                        { coords: [40.650002, -73.949997], name: 'Marcador 3' }
                    ];

                    markers.forEach(marker => {
                        L.marker(marker.coords).addTo(map)
                            .bindPopup(`${marker.name}<br>Latitud: ${marker.coords[0]}<br>Longitud: ${marker.coords[1]}`);
                    });

                    // Función para mostrar la ubicación del usuario
                    function showPosition(position) {
                        userLocation = [position.coords.latitude, position.coords.longitude];
                        map.setView(userLocation, 15);
                        L.marker(userLocation).addTo(map)
                            .bindPopup('Estás aquí<br>Latitud: ' + userLocation[0] + '<br>Longitud: ' + userLocation[1])
                            .openPopup();
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

                    document.getElementById('returnBtn').onclick = function () {
                        if (userLocation) {
                            map.setView(userLocation, 15);
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
                            const marker = L.marker(e.latlng).addTo(map);
                            marker.bindPopup(`<strong>${name}</strong><br>Lat: ${lat}<br>Lng: ${lng}<br><button onclick="removeMarker(${markers2.length})">Eliminar</button>`).openPopup();
                            markers2.push({ marker, lat, lng });
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
                </script>
            </div>
        </div>
    </section>
</body>

</html>


</html>