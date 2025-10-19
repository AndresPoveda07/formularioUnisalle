<?php
$servidor = "sql206.infinityfree.com";  // Host del servidor MySQL
$usuario = "if0_40206825";           // Usuario de la base de datos
$contrasena = "6Wyr20NQV6WGY7";   // Contraseña del usuario
$basedatos = "if0_40206825_bd_contacto";   // Nombre de la base de datos

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    // Puedes dejar esto solo para pruebas:
    // echo "Conexión exitosa";
}
?>