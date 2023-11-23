<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo "No se ha iniciado sesión.";
    exit;
}


$matriculaUsuario = $_SESSION['usuario'];


if (!isset($matriculaUsuario)) {
    echo "La matrícula del usuario no está definida.";
    exit;
}


require('../conexion.php');


if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

//consulta información del alumno y su grupo
$sqlAlumno = "SELECT alumno.Nombre, alumno.ApellidoPaterno, alumno.ApellidoMaterno, grupo.Descripcion
              FROM alumno
              JOIN grupo ON alumno.Grupo_IdGrupo = grupo.IdGrupo
              WHERE alumno.MatriculaAlumno = ?";
$stmtAlumno = mysqli_prepare($conn, $sqlAlumno);



if (!$stmtAlumno) {
    die("Error en la preparación de la consulta: " . mysqli_error($conn));
}


mysqli_stmt_bind_param($stmtAlumno, 's', $matriculaUsuario);
mysqli_stmt_execute($stmtAlumno);


$resultAlumno = mysqli_stmt_get_result($stmtAlumno);


if ($resultAlumno && mysqli_num_rows($resultAlumno) == 1) {
    $infoAlumno = mysqli_fetch_assoc($resultAlumno);

   
} else {
    echo "Error al obtener la información del alumno. Detalles: " . mysqli_error($conn);
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <style>
      
    

    body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        #menu {
          
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        #menu ul {
            list-style-type: none;
            padding: 0;
        }

        #menu ul li {
            display: inline;
            margin-right: 20px;
        }

        #menu a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        #salir {
          
            display: block;
            float: right;
            margin: -6px auto;
            padding: 10px 20px;
            background-color: #ff3333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <pre>
  </pre><center>
    <img src="../Imagenes\sin.png" alt="Descripción de la imagen" width="235" height="90">
    </center>
    <pre>
    </pre>
    
    <div id="menu">
        <ul>
            <li><a href="Alum.php">Horario</a></li>
            <li><a href="#">5.0</a></li>
            <li><a href="Alumno1.php">Actividades</a></li>
            
            <button id="salir" onclick="salir()">Salir</button>
        </ul>
    </div>
    <pre>
    </pre>
    
    <script>
        function salir() {
            
            //alert("Saliendo de la aplicación");
            window.location.href = '../cerrar_sesion.php';
        }
    </script>
  </style>
</head>
<body>
  
  
    </head>
    <body>
    
      <title>Alumno Horario</title>
  <style>
    .info-box {
      border: 2px solid #333;
      padding: 20px;
      
      background-color: #f0f0f0;
      width: 85 pulgadas;
      margin: 0 auto;
      text-align: center;
    }
  </style>
</head>
<body>


<div class="info-box">
    <h2 style="text-align: left;">Alumno</h2>
    <?php if (isset($infoAlumno)): ?>
        <p style="text-align: left;">Alumno: <?php echo $infoAlumno['Nombre'] . ' ' . $infoAlumno['ApellidoPaterno'] . ' ' . $infoAlumno['ApellidoMaterno']; ?></p>
        <p style="text-align: left;">Grupo: <?php echo $infoAlumno['Descripcion']; ?></p>
    <?php else: ?>
        <p style="text-align: left;">No se pudo obtener la información del alumno.</p>
    <?php endif; ?>
    <p style="text-align: left;">Matrícula: <?php echo $matriculaUsuario; ?></p>
</div>



</body>
      <center> <body>
  
      <pre>
      </pre>
    </table>
    <style>
      .dropdown {
        position: relative;
        display: inline-block;
        background-color: #4CAF50;
        
        color: #fff;
        padding: 20px 20px;
        border: none;
        cursor: pointer;
      }
  
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f5f5f5;
        min-width: 10px;
        box-shadow: 4px 5px 4px 12px rgba(0,0,0,0.2);
        z-index: 5x;
      }
  
      .dropdown-content a {
        display: block;
        padding: 20px 20px;;
        text-decoration: none;
        color: #333;
      }
  
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
       body {
          border: 30px solid #a7f7ae; 
          padding: 20px; 
        }
        
    </style>
  </head>
  
    <div>
   
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    
    th {
      background-color: #e9c86e;
    }
  </style>
</head>
<body>
  
  <center><h2>Horario de la Semana</h2></center>
              <table>
                  <tr>
                      <th>Hora</th>
                      <th>Lunes</th>
                      <th>Martes</th>
                      <th>Miercoles</th>
                      <th>Jueves</th>
                      <th>Viernes</th>
                      
                  </tr>
                  <tr>
                      <td>7:00 AM</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                    <td>8:00 AM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9:00 AM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>10:00 AM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                   
                      <td>11:00 AM</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                     
                  </tr>
    
       
         
         

      <body style="background-color: #f0f0f0">
</table>
</body>
</html>