<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "<h2 style='text-align:center;color:#002855;font-family:Arial;'>Gracias, $nombre. Tu mensaje ha sido enviado.</h2>";
    echo "<p style='text-align:center;'><a href='index.html'>Volver al formulario</a></p>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>