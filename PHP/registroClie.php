<?php
include('conexion.php');
$name = $_POST['nameCli'];
$mail = $_POST['mailCli'];
$tel = $_POST['nTCli'];
$contra = $_POST['contrCli'];
$consulta = "INSERT INTO clientes (id, Nombre, correo, numTel, contraseña) VALUEs (NULL, '$name', '$mail', '$tel', '$contra')";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    echo ("Hubo un error, verifique con el administrador");
} else {
    header("Location: ../WEB/inicioSesion.php");
}
?>