<?php
$servername = "localhost";
$database = "se_seguimiento_de_estudiantes";
$username = "root";
$password = "kitsune34";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
