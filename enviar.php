<?php

	$destino = "raulgc101402@gmail.com";
	$nombre = $_POST["nombre"];
	$correo = $_POST["email"];
	$mensaje = $_POST["mensaje"];

	$contenido = "Nombre: " . $nombre . "\n Correo" . $email . "\n Mensaje: " . $mensaje;
	mail($destino, "contacto", $contenido);
	header("Location:gracias.html");
?>