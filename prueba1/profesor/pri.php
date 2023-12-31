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


$sql = "SELECT Nombre, ApellidoPaterno, ApellidoMaterno FROM maestro WHERE MatriculaMestro = ?";
$stmt = mysqli_prepare($conn, $sql);


if (!$stmt) {
    die("Error en la preparación de la consulta: " . mysqli_error($conn));
}


mysqli_stmt_bind_param($stmt, 's', $matriculaUsuario);
mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);


if ($result && mysqli_num_rows($result) == 1) {
    $infoMaestro = mysqli_fetch_assoc($result);
} else {
    echo "Error al obtener la información del maestro. Detalles: " . mysqli_error($conn);
    exit;
}
?>



<!DOCTYPE html>
<html>
<head>
    <style>
      
        
        #cerrar-sesion-btn {
      position: fixed;
      left: 1200px; 
      top: 80px; 
      background-color: #acac9c;
      color: #911a1a;
      padding: 10px 20px; 
      border: none; 
      cursor: pointer;
      
    }
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
            <li><a href="pro.php">Horario</a></li>
            <li><a href="pri.php">Alumnos</a></li>
            <li><a href="#">5.0</a></li>
            <li><a href="Profe.php">Seguimiento</a></li>
        
            <button id="salir" onclick="salir()">Salir</button>

        </ul>
    </div>
    <pre>
    </pre>
    
    <script>
        function salir() {
            
            //alert("Saliendo de la aplicación");
            window.location.href = '../cerrar_sesion.php';s
        }
    </script>
  </style>
</head>
<body>
  
  
    </head>
    <body>
    
      <title>Profesor Lista de Alumnos</title>
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
        <h2 style="text-align: left;">Profesor</h2>
        <?php if (isset($infoMaestro)): ?>
            <p style="text-align: left;">Profesor: <?php echo $infoMaestro['Nombre'] . ' ' . $infoMaestro['ApellidoPaterno'] . ' ' . $infoMaestro['ApellidoMaterno']; ?></p>
        <?php else: ?>
            <p style="text-align: left;">No se pudo obtener la información del maestro.</p>
        <?php endif; ?>
        <p style="text-align: left;">Matricula: <?php echo $matriculaUsuario; ?></p>
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
  
  <style>
  
    table {
      width: 100%; 
      height: 100%; 
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
   
  </head>
  <body>
  
  <table>
    <h2>Lista de Alumnos y Actividades</h2>
      <th>Matricula</th>
      <th>Alumno</th>
      <th>Actividad</th>
      <th>Materia</th>
      <th>Fecha</th>
      <th>Completado</th>
    </tr>
    <tr>
      <td>213187012</td>
      <td>Luis</td>
      <td>Diagrama de flujo</td>
      <td>Tutorias</td>

      <td>20/11/2024</td>
      <td>si</td>
      
    </tr>
    <tr>
      <td>213101221</td>
      <td>Luisa</td>
      <td>Mapa </td>
      <td>Historia</td>
      <td>20/12/2023</td>
      <td>no</td>
    
    </tr>
   
    <body style="background-color: #f0f0f0;">
  </table>
  
</div>
</body>
</body>
</html>

