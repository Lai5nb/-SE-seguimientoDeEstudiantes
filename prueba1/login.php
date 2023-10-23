<?php
require('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['matricula']) && isset($_POST['contrasena'])) {
        $matricula = $_POST['matricula'];
        $contrasena = $_POST['contrasena'];

        // Utilizar declaraciones preparadas para evitar la inyección SQL
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND contraseña = ?";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ss', $matricula, $contrasena);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                // Inicio de sesión exitoso
                session_start();
                $_SESSION['usuario'] = $matricula;  // Cambia 'matricula' a 'usuario'
                header("location: principal.php");
            } else {
                // Credenciales incorrectas
                echo "Credenciales incorrectas. <a href='index.php'>Volver</a>";
            }
        } else {
            // Error en la sentencia preparada
            echo "Error en la sentencia preparada. " . mysqli_error($conn);
        }
    } else {
        // Los campos del formulario no se enviaron correctamente
        echo "Por favor, complete el formulario. <a href='index.php'>Volver</a>";
    }
}
?>
