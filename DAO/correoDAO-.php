<?php

$destino = "juanramhua@gmail.com";
$correo = $_POST['correo'];
$contenido "correo:" .$correo ;

mail($destino, "contacto", $contenido, "holaaa");

header("Location:../index.php");

?>