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
    <link rel="stylesheet" href="../CSS/terminos.css">
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
                    <li onclick="location.href='t.php?id=<?php echo $id; ?>'">Inicio</li>
                    <li onclick="location.href='servicios.php?id=<?php echo $id; ?>'">Servicios</li>
                    <li class="inicio">Terminos y condiciones</li>
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
    <div class="terminos">
        <div class="uno">
    <h1>Terminos y condiciones</h1>
    <p>Última actualización: 11 de octubre de 2024</p>
    <p>Estos términos y condiciones rigen el acceso y uso del sitio web de VendorLink, así como los servicios que ofrecemos. Al acceder o utilizar nuestros servicios, aceptas los presentes Términos en su totalidad. Si no estás de acuerdo con alguno de estos Términos, te recomendamos que no utilices nuestros servicios.</p>
</div>
<div class="dos">
    <h2>Responsabilidad del usuario</h2>
    <p>El usuario se compromete a:</p>
    <ul>
        <li>Proporcionar informacion veraz y actualizada</li>
        <li>Usar los servicios de forma responsable</li>
        <li>No utilizar los servicios para actividades ilicitas o fraudolentas</li>
    </ul>
</div>
<div class="tres">
    <h2>Responsabilidades del provedor</h2>
    <p>La empresa se compromete a:</p>
    <ul>
        <li>Presentar los servicios de manera profesonial</li>
        <li>Respetar los plazos y condiciones</li>
        <li>Mantener confidencialidad</li>
    </ul>
</div>
<div class="cuatro">
    <h2>Responsabilidades de VerdoLink</h2>
    <p>VerdoLink no se hace responsable por:</p>
    <ul>
        <li>Perdidas o daños causados por el uso incorrecto o inapropiado de los servicios</li>
        <li>Fallos tecnicos o interrupciones en el servicio ajenos a la empresa</li>
        <li>El contenido y decisiones por terceros con base en la informacion o resultados obtenidos a traves de los servicios</li>
    </ul>
</div>
</div>
</body>