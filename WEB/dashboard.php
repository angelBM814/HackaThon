<?php
include('../PHP/conexion.php');
$id = $_GET['id'];
$consulta = "SELECT * FROM proveedores WHERE id='$id'";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    # code...
    echo 'No se pudo obtener información';
    exit();
} else {
    $extraer = mysqli_fetch_array($eje);
    $user = $extraer['marca'];
}

$consulta2 = "SELECT * FROM publicaciones WHERE marca = '$user'";
$eje2 = mysqli_query($conex, $consulta2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="text/css" href="../IMG/logo.jpeg">
    <link rel="stylesheet" href="../CSS/perfil.css">
    <title><?php echo $user; ?></title>
</head>

<body>
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path
                        d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                </svg>
                <h2>Tablero</h2>
            </div>
            <div class="trabajo">
                <?php
                if (!$eje2) {
                    echo 'No se pudieron obtener las publicaciones';
                    exit();
                } else {
                    while ($extraerPu = mysqli_fetch_array($eje2)) {
                        # code...
                        ?>
                        <div class="publicacion"
                            >
                            <div class="txt-publi">
                                <h4 onclick="location.href='publicacion.php?name=<?php echo $extraerPu['titulo']; ?>&id=<?php echo $id; ?>'"><?php echo ($extraerPu['titulo']); ?></h4>
                                <p><?php echo ($extraerPu['descripcion']); ?></p>
                            </div>
                            <div class="close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5" onclick="location.href='../PHP/borrarPubli.php?name=<?php echo $extraerPu['titulo']; ?>&id=<?php echo $id; ?>'">
                                    <path
                                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                            </div>

                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="notificaciones">
            <div class="header-noti">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path
                        d="M4.214 3.227a.75.75 0 0 0-1.156-.955 8.97 8.97 0 0 0-1.856 3.825.75.75 0 0 0 1.466.316 7.47 7.47 0 0 1 1.546-3.186ZM16.942 2.272a.75.75 0 0 0-1.157.955 7.47 7.47 0 0 1 1.547 3.186.75.75 0 0 0 1.466-.316 8.971 8.971 0 0 0-1.856-3.825Z" />
                    <path fill-rule="evenodd"
                        d="M10 2a6

 6 0 0 0-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 0 0 .515 1.076 32.91 32.91 0 0 0 3.256.508 3.5 3.5 0 0 0 6.972 0 32.903 32.903 0 0 0 3.256-.508.75.75 0 0 0 .515-1.076A11.448 11.448 0 0 1 16 8a6 6 0 0 0-6-6Zm0 14.5a2 2 0 0 1-1.95-1.557 33.54 33.54 0 0 0 3.9 0A2 2 0 0 1 10 16.5Z"
                        clip-rule="evenodd" />
                </svg>
                <h3>Notificaciones</h3>
            </div>


            <div class="notificacion">
                <?php
                $consulta3 = "SELECT * FROM notificaciones WHERE usuario = "
                ?>
                <div class="noti">
                    <h4>Juan comento en tu publicacion "Laptop Lenovo"</h4>
                    <p>"Muy buena opcion para una carrera como la programacion, la compre y..."</p>
                </div>
                <div class="noti">
                    <h4>Alexis adquirio Fifa 24</h4>
                    <p>Ver datos del pedido.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="all">
        <div class="crear">
            <div class="header-crear">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z"
                        clip-rule="evenodd" />
                </svg>
                <h2>Crear</h2>
            </div>
            <form action="../PHP/dashboard.php?marca=<?php echo $user; ?>&id=<?php echo $id; ?>" method="post">
                <div class="todo">
                    <div class="datos">
                        <input name="titulo" type="text" placeholder="Título de la publicación">
                        <select name="categoria" id="">
                            <option value="" hidden>Categoría</option>
                            <option value="Electrica">Electrica</option>
                            <option value="Informatica">Informática</option>
                            <option value="Plomeria">Plomería</option>
                            <option value="Cuidados">Cuidados</option>
                            <option value="Otros">Otros</option>
                        </select>
                        <div class="desc">
                            <h4>Descripcion</h4>
                            <textarea name="descrip" id=""></textarea>
                        </div>
                        <input name="precio" type="number" placeholder="Precio">
                        <input name="imagen" typer="text" placeholder="Imagen (URL)">
                        <div class="submit">
                            <input name="publicar" type="submit" value="Publicar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>