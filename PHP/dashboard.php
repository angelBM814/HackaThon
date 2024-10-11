<?php
include('conexion.php');
$id = $_GET['id'];
$name = $_POST['titulo'];
$cate = $_POST['categoria'];
$desc = $_POST['descrip'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
$marca = $_GET['marca'];
$consulta = "INSERT INTO publicaciones (id, marca, titulo, categoria, descripcion, precio, imagen) VALUES (NULL, '$marca', '$name', '$cate', '$desc', 
'$precio', '$imagen')";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    # code...
    echo 'No se pudo ingresar los datos';
    exit();
} else {
    header("Location: ../WEB/dashboard.php?id=$id");
}
?>