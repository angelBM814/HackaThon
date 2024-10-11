<?php
include('../PHP/conexion.php');
$id = $_GET['id'];
$contenido = $_POST['busq'];
$consulta = "SELECT * FROM publicaciones WHERE marca LIKE '%$contenido%' OR titulo LIKE '%$contenido%' OR categoria LIKE '%$contenido%'
OR precio LIKE '%$contenido%'";
$eje = mysqli_query($conex, $consulta);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/servicios.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <img src="../IMG/logo.jpeg" alt="">
            </div>
            <div class="lista">
                <ul>
                    <li onclick="location.href='t.php'">Inicio</li>
                    <li class="inicio">Servicios</li>
                    <li onclick="location.href='termninos.php'">Terminos y condiciones</li>
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
    <main>
        <div action="buscar.php">
            <div class="search">
                <form action="busqueda.php?id=<?php echo $id; ?>" method="post">
                    <input type="text" name="busq" placeholder="Busca tus servicios">
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
            </div>

            </form>
            <div class="productos">
                <?php
                if (!$eje) {
                    # code...
                    echo 'No se pudo obtener información';
                    exit();
                } else {
                    while ($extraer = mysqli_fetch_array($eje)) {
                        # code...
                        ?>
                        <div class="producto">
                            <div class="contenedor">
                                <div class="header-producto">
                                    <img src="<?php echo $extraer['imagen']; ?>">
                                    <div class="txt-header">
                                        <h3><?php echo $extraer['titulo']; ?></h3>
                                        <h4>$<?php echo $extraer['precio']; ?></h4>
                                    </div>
                                </div>
                                <div class="descrip">
                                    <p><?php echo $extraer['descripcion']; ?></p>
                                </div>
                                <div class="boton">
                                    <button
                                        onclick="location.href='publicacion.php?name=<?php echo $extraer['titulo']; ?>&id=<?php echo $id; ?>'">Ir
                                        a la publicacion</button>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
    </main>
</body>

</html>