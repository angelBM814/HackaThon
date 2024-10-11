<?php
include('conexion.php');
$id = $_GET['id'];
$name = $_GET['name'];
$consulta = "DELETE FROM publicaciones WHERE titulo = '$name'";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    # code...
    echo 'No se pudo borrar esta publicaciòn';
} else {
    header("Location: ../WEB/dashboard.php?id=$id");
}
?>