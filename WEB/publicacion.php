<?php
include('../PHP/conexion.php');
session_start();
$id = $_GET['id'];
$name = $_GET['name'];
$consulta = "SELECT * FROM publicaciones WHERE titulo = '$name'";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    # code...
    echo 'No se pudo obtener los datos';
    exit();
} else {
    $extraer = mysqli_fetch_array($eje);
}
$consulta2 = "SELECT * FROM comentarios WHERE id_titulo = '$name'";
$eje2 = mysqli_query($conex, $consulta2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/publicacion.css">
    <title><?php echo $extraer['titulo']; ?></title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <img src="../IMG/logo.jpeg" alt="">
            </div>
            <div class="lista">
                <ul>
                    <li onclick="location.href='t.php?id=<?php echo $id; ?>'">Inicio</li>
                    <li class="inicio">Servicios</li>
                    <li onclick="location.href='terminos.php?id=<?php echo $id; ?>'">Terminos y condiciones</li>
                </ul>
            </div>
            <?php
            if ($id != "") {
                # code...
                ?>
                <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="size-5" onclick="location.href='dashboard.php?id=<?php echo ($id); ?>'">
                    <path
                        d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                </svg>

                <?php
            } else {
                ?>
                <div class="butttons">
                    <button onclick="location.href='inicioSesion.php'" class="sesion">Iniciar sesion</button>
                    <button onclick="location.href='registro.php'" class="regist">Registrarse</button>
                </div>
                <?php
            }
            ?>

        </div>
    </header>
    <section>
        <div class="all">
            <div class="imagen">
                <img src="<?php echo $extraer['imagen']; ?>" alt="">
            </div>
            <div class="obj">
                <div class="marca">
                    <h1><?php echo $extraer['marca']; ?></h1>
                </div>
                <div class="txt-publi">
                    <h2><?php echo $extraer['titulo']; ?></h2>
                    <h4>$<?php echo $extraer['precio']; ?></h4>
                    <p><?php echo $extraer['descripcion']; ?></p>
                    <div class="boton">
                        <button
                            onclick="location.href='pago.php?prod=<?php echo $name; ?>&id=<?php echo $id; ?>'">Adquirir</button>
                    </div>
                </div>
                <div class="coments">
                    <form action="../PHP/coments.php?name=<?php echo $name; ?>" method="post">
                        <textarea name="comentario" placeholder="Aquí pon tus comentarios (Anónimo)" id=""></textarea>
                        <input type="submit" value="Comentar">
                    </form>
                </div>
                <div id="mapa">
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
                <div class="comentarios">
                    <h3>Comentarios</h3>
                    <?php
                    if (!$eje2) {
                        # code...
                        echo 'No se pudo obtener los datos';
                        exit();
                    } else {
                        while ($extraer2 = mysqli_fetch_array($eje2)) {
                            # code...
                            ?>
                            <p><?php echo $extraer2['comentario']; ?></p>
                            <?php
                        }

                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>