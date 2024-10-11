<?php
include('conexion.php');

$marca = $_POST['marca'];
$mail = $_POST['correo'];
$dire = $_POST['direccion'];
$tel = $_POST['numcel'];
$pass = $_POST['pass'];
$descrip = $_POST['descrip'];
$cate = $_POST['categoria'];

$consulta = "INSERT INTO proveedores (id, marca, correo, direccion, numTel, contra, descrip, categoria, latitud, longitud) VALUES (NULL, '$marca', '$mail', '$dire', '$tel', '$pass', '$descrip', '$cate', '0', '0')";

$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    echo "Hubo un error, verificar con administrador";
} else {
    // Redireccionar o mostrar un mensaje de éxito
    // header("Location: ../WEB/inicioSesion.php");
}
?>