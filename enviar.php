<?php
    $destino = "primito75@yahoo.es";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contenido = "Nombre: " .$nombre. "\nApellido: ".$apellido. "\nCorreo: ".$correo;
    mail($destino,"Contacto",$contenido);
    header("location:gracias.html");
?>