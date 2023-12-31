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
            <li><a href="profe.php">Seguimiento</a></li>
            
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
    
      <title>Profesor Seguimiento</title>
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
  </head>
  
    
      
      </center>
      </div>
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
    <br> <br> 
    <title>Seguimiento de Estudiantes</title>
    <style>
      table {
        border-collapse: collapse;
      }
      table, th, td {
        border: 1px solid black;
      }
      th, td {
        padding: 5px;
        text-align: center;
      }
      .firma {
        width: 200px;
        height: 100px;
        border: 1px solid #000;
      }
    </style>
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos.css">
  <body>
    <h1>Seguimiento de Estudiantes</h1>
  
   
    <form id="formulario-estudiante">
      <label for="matricula">Matricula:</label>
      <input type="text" id="matricula" name="matricula" required>

      <label for="nombre">Nombre del alumno:</label>
      <input type="text" id="nombre" name="nombre" required>
  
      <label for="actividad">Actividad:</label>
      <input type="text" id="actividad" name="actividad" required>
  
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required>
  
      <label for="completado">Completado:</label>
      <input type="checkbox" id="completado" name="completado">
  
     
      
  
    
  
      <input type="submit" value="Registrar">
    </form>
  
    <pre>
    </pre>
    <table>
      <tr>
        <th>Matricula</th>
        <th>Nombre del Alumno</th>
        <th>Actividad</th>
        <th>Fecha</th>
        <th>Completado</th>
        
      </tr>
    </table>
  
    <script>
      const formulario = document.getElementById("formulario-estudiante");
      const tabla = document.querySelector("table");
      
  
      formulario.addEventListener("submit", function(event) {
        event.preventDefault();
  
        const matricula = document.getElementById("matricula").value;
        const nombre = document.getElementById("nombre").value;
        const actividad = document.getElementById("actividad").value;
        const fecha = document.getElementById("fecha").value;
        const completado = document.getElementById("completado").checked;
  
        const fila = tabla.insertRow(1);
        const celdaMatricula = fila.insertCell(0);
        const celdaNombre = fila.insertCell(1);
        const celdaActividad = fila.insertCell(2);
        const celdaFecha = fila.insertCell(3);
        const celdaCompletado = fila.insertCell(4);
        const celdaFirma = fila.insertCell(5);
  
        celdaNombre.textContent = nombre;
        celdaActividad.textContent = actividad;
        celdaFecha.textContent = fecha;
        celdaCompletado.textContent = completado ? "Sí" : "No";
  
        const canvas = document.createElement("canvas");
        canvas.width = 200;
        canvas.height = 100;
  
        celdaFirma.appendChild(canvas);
  
        
        formulario.reset();
       
        const ctx = canvas.getContext("2d");
        ctx.clearRect(0, 0, canvas.width, canvas.height);
      });
  
      limpiarFirma.addEventListener("click", function() {
        const firmaCanvas = document.getElementById("firma");
        const ctx = firmaCanvas.getContext("2d");
        ctx.clearRect(0, 0, firmaCanvas.width, firmaCanvas.height);
      });
    </script>
  </body>
  </head>
  
    <body style="background-color: #f0f0f0;">
  </table>
  
</div>
</body>
</body>
</html>

