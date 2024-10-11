<?php
include '../PHP/conexion.php';
$id = $_GET['id'];
$name = $_GET['prod'];
$consulta = "SELECT * FROM publicaciones WHERE titulo = '$name'";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    # code...
    echo 'No se pudo obtener los datos';
    exit();
} else {
    $extraer = mysqli_fetch_array($eje);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/pago.css">
    <script src="../JS/pago.js"></script>
    <title>Pago</title>
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
                    <li onclick="location.href='servicios.php.php?id=<?php echo $id; ?>'" class="inicio">Servicios</li>
                    <li onclick="location.href='terminos.php?id=<?php echo $id; ?>'">Terminos y condiciones</li>
                </ul>
            </div>
            <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                class="size-5" onclick="location.href='dashboard.php?id=<?php echo ($id); ?>'">
                <path
                    d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
            </svg>

        </div>
    </header>
    <section>
        <form action="#" name="form">
            <div id="pTargeta">
                <input type="text" name="" id="nTarg" placeholder="Número de targeta">
                <input type="text" name="" id="name2" placeholder="Nombre y apellido">
                <input type="text" name="" id="fecha" placeholder="Fecha de vencimiento">
                <input type="number" name="" id="codSeg" placeholder="Código de seguridad">
            </div>
            <div id="btns">
                <input type="button" onclick="calculo()" name="" class="but" value="Cálcular">
                <input type="button" onclick="ticket()" name="" class="but" value="Imprimir ticket">
            </div>
            <div id="ticket">
                <div id="tarjeta">
                    <div id="front">
                        <p>Tarjeta frontal</p>
                        <img src="https://img.icons8.com/office/500/sim-card-chip.png">
                        <div>
                            <p id="tarj_N">0000 0000 0000 0000</p>
                            <p id="tarj_Fecha">00/00</p>
                            <p id="dueño1">Nombre</p>
                        </div>
                    </div>
                    <div id="tras">
                        <div id="linea"></div>
                        <div id="cvv">
                            <p>1234</p>
                        </div>
                        <div>
                            <p id="tarj_N2">0000 0000 0000 0000</p>
                            <p id="tarj_Fecha2">00/00</p>
                            <p id="dueño2">Nombre</p>
                        </div>
                    </div>
                </div>
                <input type="button" onclick="location.reload()" name="" class="but" value="Entendido">
            </div>
        </form>
    </section>
</body>

</html>