<?php
include('conexion.php');
$coment = $_POST['comentario'];
$name = $_GET['name'];
$id = $_GET['id'];
$consulta = "INSERT INTO comentarios (id, id_titulo, comentario) VALUES (NULL, '$name', '$coment')";
$eje = mysqli_query($conex, $consulta);
if (!$eje) {
    # code...
    echo 'No se pudo completar tu comentario';
    exit();
} else {
    header("Location: ../WEB/publicacion.php?name=$name&id=$id");
}
?>