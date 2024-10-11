<?php
include('../PHP/conexion.php');
$id = $_GET['id'];
$consulta = "SELECT * FROM publicaciones";
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
                    <li onclick="location.href='t.php?id=<?php echo $id; ?>'">Inicio</li>
                    <li class="inicio">Servicios</li>
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
    <main>
        <div action="buscar.php">
            <div class="search">
                <form action="busqueda.php?id=<?php echo $id; ?>" method="post">
                    <input type="text" name="busq" placeholder="Busca tus servicios">
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
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
                                        a la
                                        publicacion</button>
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