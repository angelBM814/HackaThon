<?php
include('conexion.php');
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$consulta = "SELECT * FROM clientes WHERE correo = '$mail' AND contraseña = '$pass'";
$consulta2 = "SELECT * FROM proveedores WHERE correo = '$mail' AND contra = '$pass'";
$eje2 = mysqli_query($conex, $consulta2);
$eje = mysqli_query($conex, $consulta);
if ($eje || $eje2) {
    $extraer = mysqli_fetch_array($eje);
    $filas = mysqli_num_rows($eje);
    $extraer2 = mysqli_fetch_array($eje2);
    $filas2 = mysqli_num_rows($eje2);
    if ($filas) {
        session_start();
        $id = $extraer['id'];
        header("Location: ../WEB/t.php?id=$id&type=c");
    } else {
        if ($filas2) {
            session_start();
            $id2 = $extraer2['id'];
            header("Location: ../WEB/dashboard.php?id=$id2&type=t");
        } else {
            echo 'No se econtró tu usuario, verifica tus datos';
            exit();
        }
    }

}
?>