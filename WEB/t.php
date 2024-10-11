<?php
include('../PHP/conexion.php');
error_reporting(0);
session_start();
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="text/css" href="../IMG/logo.jpeg">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>VendorLink</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <img src="../IMG/logo.jpeg" alt="">
            </div>
            <div class="lista">
                <ul>
                    <li class="inicio">Inicio</li>
                    <li onclick="location.href='servicios.php?id=<?php echo $id; ?>'">Servicios</li>
                    <li onclick="location.href='terminos.php?id=<?php echo $id; ?>'">Terminos y condiciones</li>
                
                </ul>
            </div>
            <?php
            if ($id != "") {
                # code...
                ?>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"
                    onclick="location.href='perfil.php?id=<?php echo ($id); ?>'">
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
    <section id="principal">
        <div id="info">
            <h1>VendorLink</h1>
            <p>Anunciate con nosotros en <span>VendorLink</span></p>
            <button>Más información</button>
        </div>
        <div class="servicios">
            <div class="txt-servicio">
                <h3>Servicios</h3>
                <p>Llevando tu negocio al siguiente nivel</p>
            </div>
            <div class="acciones">
                <div class="market">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path
                            d="M2.879 7.121A3 3 0 0 0 7.5 6.66a2.997 2.997 0 0 0 2.5 1.34 2.997 2.997 0 0 0 2.5-1.34 3 3 0 1 0 4.622-3.78l-.293-.293A2 2 0 0 0 15.415 2H4.585a2 2 0 0 0-1.414.586l-.292.292a3 3 0 0 0 0 4.243ZM3 9.032a4.507 4.507 0 0 0 4.5-.29A4.48 4.48 0 0 0 10 9.5a4.48 4.48 0 0 0 2.5-.758 4.507 4.507 0 0 0 4.5.29V16.5h.25a.75.75 0 0 1 0 1.5h-4.5a.75.75 0 0 1-.75-.75v-3.5a.75.75 0 0 0-.75-.75h-2.5a.75.75 0 0 0-.75.75v3.5a.75.75 0 0 1-.75.75h-4.5a.75.75 0 0 1 0-1.5H3V9.032Z" />
                    </svg>
                    <h4>Encuentra servicios</h4>
                    <p>Con +10 servicios disponibles.</p>
                </div>
                <div class="seguro">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd"
                            d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4>Seguro y veraz</h4>
                    <p>Respaldado por muchos usuarios.</p>
                </div>
                <div class="pagos">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd"
                            d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h4>Pagos seguros</h4>
                    <p>Paga con paypal o en persona.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer">
            <ul>
                <li><img src="../IMG/logo.jpeg"></li>
                <li>
                    <h3>VendoLink</h3>
                </li>
                <li>
                    <p>© 2024</p>
                </li>
                <li>
                    <p>Acerca de</p>
                </li>
                <li>
                    <p>Accesibilidad</p>
                </li>
                <li>
                    <p>Terminos de uso</p>
                </li>
            </ul>
        </div>
    </footer>
</body>

</html>