<?php
require('conexion.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['matricula']) && isset($_POST['contrasena'])) {
        $matricula = $_POST['matricula']; 
        $contrasena = $_POST['contrasena']; 

       
        $sql = "CALL LogUsu(?, ?)";
        
        $stmt = mysqli_prepare($conn, $sql); 

  
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ss', $matricula, $contrasena); 
            mysqli_stmt_execute($stmt); 

            $result = mysqli_stmt_get_result($stmt); 

            if ($result && mysqli_num_rows($result) == 1) {
                $usuario = mysqli_fetch_assoc($result);
                $tipo = $usuario['tipo']; 

                
                session_start();
                $_SESSION['usuario'] = $matricula; 
                $_SESSION['tipo'] = $tipo; 

                
                if ($tipo == 'alumno') {
                    header("location: alum/Alum.php");

                } else if ($tipo == 'maestro') {
                    header("location: profesor/pri.php");

                } else if ($tipo == 'coordinador') {
                    header("location: coordi/Coor1.php");
                }
                } else {
 
    
    session_start();
    $_SESSION['error_message'] = "Datos invalidos.";
    header("location: index.php");
    
   

            }
        }
    }
}
?>
