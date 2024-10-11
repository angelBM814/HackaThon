<?php
include('../PHP/conexion.php');
$id = $_GET['id'];
$consulta = "SELECT * FROM clientes WHERE id='$id'";
$eje = mysqli_query($conex, $consulta);
$extraer = mysqli_fetch_array($eje);
$user = $extraer['Nombre'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="text/css" href="../IMG/logo.jpeg">
    <script src="../JS/perfil.js"></script>
    <link rel="stylesheet" href="../CSS/usuario.css">
    <title><?php echo $user; ?></title>
</head>

<body onload="mostrar()">
    <div class="profile">
        <div class="user">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path
                    d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
            </svg>

            <h2><?php echo ($user); ?></h2>


        </div>
    </div>
    <div class="publicaciones">
        <div class="dashboard">
            <div class="header-dash">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"
                    onclick="">
                    <path
                        d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                </svg>
                <h2>Datos de usuario</h2>
            </div>
            <div class="trabajo">
                <div class="publicacion">
                    <div class="usuario">
                        <h4>Nombre de usuario:</h4>
                        <p><?php echo ($user); ?></p>
                    </div>
                    <div class="cambio">
                        <h5 onclick="mostrarMsj1()">Cambiar nombre de usuario</h5>
                    </div>
                </div>
                <div class="publicacion">
                    <div class="telefono">
                        <h4>Telefono:</h4>
                        <p><?php echo $extraer['numTel']; ?></p>
                    </div>
                    <div class="cambio">
                        <h5 onclick="mostrarMsj2()">Cambiar telefono</h5>
                    </div>
                </div>
                <div class="publicacion">
                    <div class="correo">
                        <h4>Correo electronico:</h4>
                        <p><?php echo $extraer['correo']; ?></p>
                    </div>
                    <div class="cambio">
                        <h5 onclick="mostrarMsj3()">Cambiar correo</h5>
                    </div>
                </div>
                <div class="contraseña">
                    <div class="pass">
                        <h4>Contraseña</h4>
                        <p id="hidden">****************</p>
                        <p id="visible"><?php echo $extraer['contraseña']; ?></p>
                    </div>
                    <div class="show">
                        <h6 onclick="mostrarMsj4()">Cambiar contraseña</h6>
                        <h5 onmouseup="soltar()" onmousedown="mostrar2()">Mostrar contraseña</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="notificaciones">
            <div class="header-noti">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path
                        d="M4.214 3.227a.75.75 0 0 0-1.156-.955 8.97 8.97 0 0 0-1.856 3.825.75.75 0 0 0 1.466.316 7.47 7.47 0 0 1 1.546-3.186ZM16.942 2.272a.75.75 0 0 0-1.157.955 7.47 7.47 0 0 1 1.547 3.186.75.75 0 0 0 1.466-.316 8.971 8.971 0 0 0-1.856-3.825Z" />
                    <path fill-rule="evenodd"
                        d="M10 2a6 6 0 0 0-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 0 0 .515 1.076 32.91 32.91 0 0 0 3.256.508 3.5 3.5 0 0 0 6.972 0 32.903 32.903 0 0 0 3.256-.508.75.75 0 0 0 .515-1.076A11.448 11.448 0 0 1 16 8a6 6 0 0 0-6-6Zm0 14.5a2 2 0 0 1-1.95-1.557 33.54 33.54 0 0 0 3.9 0A2 2 0 0 1 10 16.5Z"
                        clip-rule="evenodd" />
                </svg>
                <h3>Notificaciones</h3>
            </div>
            <div class="notificacion">
                <div class="noti">
                    <h4>Electronic Arts a enviado tu producto</h4>
                    <p>Pulsa aqui para ver el trayecto.</p>
                </div>
                <div class="noti">
                    <h4>Walmart recibio tu solicitud</h4>
                    <p>El producto "Lavadora" a sido recibido por "Walmart" y...</p>
                </div>
            </div>
        </div>
    </div>


    <div class="cambiar" id="show1">
        <div class="txt-cambiar">
            <div class="switch">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M13.2 2.24a.75.75 0 0 0 .04 1.06l2.1 1.95H6.75a.75.75 0 0 0 0 1.5h8.59l-2.1 1.95a.75.75 0 1 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 0 0-1.06.04Zm-6.4 8a.75.75 0 0 0-1.06-.04l-3.5 3.25a.75.75 0 0 0 0 1.1l3.5 3.25a.75.75 0 1 0 1.02-1.1l-2.1-1.95h8.59a.75.75 0 0 0 0-1.5H4.66l2.1-1.95a.75.75 0 0 0 .04-1.06Z"
                        clip-rule="evenodd" />
                </svg>
                <h4>Cambiar</h4>
            </div>
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"
                    onclick="cerrar1()">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </div>
        </div>
        <div class="form">
            <input type="text" placeholder="Antiguo nombre de usuario">
            <input type="text" placeholder="Nuevo nombre de usuario">
            <input type="text" placeholder="Confirmar nombre de usuario">
            <div class="buttons-form">
                <button>Confirmar</button>
            </div>
        </div>
    </div>
    <div class="cambiar" id="show2">
        <div class="txt-cambiar">
            <div class="switch">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M13.2 2.24a.75.75 0 0 0 .04 1.06l2.1 1.95H6.75a.75.75 0 0 0 0 1.5h8.59l-2.1 1.95a.75.75 0 1 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 0 0-1.06.04Zm-6.4 8a.75.75 0 0 0-1.06-.04l-3.5 3.25a.75.75 0 0 0 0 1.1l3.5 3.25a.75.75 0 1 0 1.02-1.1l-2.1-1.95h8.59a.75.75 0 0 0 0-1.5H4.66l2.1-1.95a.75.75 0 0 0 .04-1.06Z"
                        clip-rule="evenodd" />
                </svg>
                <h4>Cambiar</h4>
            </div>
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"
                    onclick="cerrar2()">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </div>
        </div>
        <div class="form">
            <input type="text" placeholder="Antiguo telefono">
            <input type="text" placeholder="Nuevo telefono">
            <input type="text" placeholder="Confirmar telefono">
            <div class="buttons-form">
                <button>Confirmar</button>
            </div>
        </div>
    </div>
    <div class="cambiar" id="show3">
        <div class="txt-cambiar">
            <div class="switch">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M13.2 2.24a.75.75 0 0 0 .04 1.06l2.1 1.95H6.75a.75.75 0 0 0 0 1.5h8.59l-2.1 1.95a.75.75 0 1 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 0 0-1.06.04Zm-6.4 8a.75.75 0 0 0-1.06-.04l-3.5 3.25a.75.75 0 0 0 0 1.1l3.5 3.25a.75.75 0 1 0 1.02-1.1l-2.1-1.95h8.59a.75.75 0 0 0 0-1.5H4.66l2.1-1.95a.75.75 0 0 0 .04-1.06Z"
                        clip-rule="evenodd" />
                </svg>
                <h4>Cambiar</h4>
            </div>
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"
                    onclick="cerrar3()">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </div>
        </div>
        <div class="form">
            <input type="text" placeholder="Antiguo correo electronico">
            <input type="text" placeholder="Nuevo correo electronico">
            <input type="text" placeholder="Confirmar correo electronico">
            <div class="buttons-form">
                <button>Confirmar</button>
            </div>
        </div>
    </div>
    <div class="cambiar" id="show4">
        <div class="txt-cambiar">
            <div class="switch">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M13.2 2.24a.75.75 0 0 0 .04 1.06l2.1 1.95H6.75a.75.75 0 0 0 0 1.5h8.59l-2.1 1.95a.75.75 0 1 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 0 0-1.06.04Zm-6.4 8a.75.75 0 0 0-1.06-.04l-3.5 3.25a.75.75 0 0 0 0 1.1l3.5 3.25a.75.75 0 1 0 1.02-1.1l-2.1-1.95h8.59a.75.75 0 0 0 0-1.5H4.66l2.1-1.95a.75.75 0 0 0 .04-1.06Z"
                        clip-rule="evenodd" />
                </svg>
                <h4>Cambiar</h4>
            </div>
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5"
                    onclick="cerrar4()">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </div>
        </div>
        <div class="form">
            <input type="text" placeholder="Antigua contraseña">
            <input type="text" placeholder="Nueva contraseña">
            <input type="text" placeholder="Confirmar contraseña">
            <div class="buttons-form">
                <button>Confirmar</button>
            </div>
        </div>
    </div>


     </body>

</html>