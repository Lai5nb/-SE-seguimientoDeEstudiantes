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

//consulta coordinador y la carrera

$sqlCoordinador = "SELECT coordinador.Nombre, coordinador.ApellidoPaterno, coordinador.ApellidoMaterno, carrera.Carreracol
                  FROM coordinador
                  JOIN carrera ON coordinador.Carrera_IdCarrera = carrera.IdCarrera
                  WHERE coordinador.MatriculaCoordinador = ?";


$stmtCoordinador = mysqli_prepare($conn, $sqlCoordinador);


if (!$stmtCoordinador) {
    die("Error en la preparación de la consulta: " . mysqli_error($conn));
}


mysqli_stmt_bind_param($stmtCoordinador, 's', $matriculaUsuario);
mysqli_stmt_execute($stmtCoordinador);


$resultCoordinador = mysqli_stmt_get_result($stmtCoordinador);


if ($resultCoordinador && mysqli_num_rows($resultCoordinador) == 1) {
    $infoCoordinador = mysqli_fetch_assoc($resultCoordinador);

} else {
    echo "Error al obtener la información del coordinador. Detalles: " . mysqli_error($conn);
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
            
            <li><a href="Coor3.php">Alumnos</a></li>
            <li><a href="#">5.0</a></li>
            <li><a href="#">Seguimiento</a></li>
            
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
    
      <title>Coordinador Registrar</title>
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
    <h2 style="text-align: left;">Coordinador</h2>
    <?php if (isset($infoCoordinador)): ?>
        <p style="text-align: left;">Coordinador: <?php echo $infoCoordinador['Nombre'] . ' ' . $infoCoordinador['ApellidoPaterno'] . ' ' . $infoCoordinador['ApellidoMaterno']; ?></p>
        <p style="text-align: left;">Matrícula: <?php echo $matriculaUsuario; ?></p>
    <?php else: ?>
        <p style="text-align: left;">No se pudo obtener la información del coordinador.</p>
    <?php endif; ?>
    <p style="text-align: left;">Componente: <?php echo $infoCoordinador['Carreracol']; ?></p>
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
  <body>
  
 
</head>
<body>
  
  <h2>Registrar un Alumno</h2>
  <form id="formulario-alumno">
    <label for="nombre">Matricula:</label>
    <input type="text" id="Matricula" name="Matricula" required>

    <label for="actividad">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre" required>

    <label for="fecha">Semestre:</label>
    <input type="text" id="Semestre" name="Semestre" required>

    <label for="fecha">Materia:</label>
    <input type="text" id="Materia" name="Materia" required>
<p>

</p>
    <label for="fecha">Profesor:</label>
    <input type="text" id="Profesor" name="Profesor" required>

    <label for="fecha">Horario:</label>
    <input type="text" id="Horario" name="Horario" required>

    <input type="submit" value="Registrar">
  </form>

  <center><h2>Registro</h2></center>
  <table>
    <tr>
      <th>Matricula</th>
      <th>Nombre</th>
      <th>Semestre</th>
      <th>Materia</th>
      <th>Profesor</th>
      <th>Horario</th>
    </tr>
    <td>213110123</td>
            <td>Luis Angel</td>
            <td>4</td>
            <td>Ingles</td>
            <td>Octavio</td>
            <td>9 am</td>
  </table>

  <script>
    document.getElementById("formulario-alumno").addEventListener("submit", function(event) {
      event.preventDefault();

      const Matricula = document.getElementById("Matricula").value;
      const Nombre = document.getElementById("Nombre").value;
      const Semestre = document.getElementById("Semestre").value;
      const Materia = document.getElementById("Materia").value;
      const Profesor = document.getElementById("Profesor").value;
      const Horario = document.getElementById("Horario").value;
      

      const tabla = document.querySelector("table");
      const fila = tabla.insertRow(5); 

      const celdaMatricula = fila.insertCell(0);
      const celdaNombre = fila.insertCell(1);
      const celdaSemestre= fila.insertCell(2);
      const celdaMateria = fila.insertCell(3);
      const celdaProfesor = fila.insertCell(4);
      const celdaHorario = fila.insertCell(5);
      c

      celdaNombre.textContent = Matricula;
      celdaActividad.textContent = Nombre;
      celdaFecha.textContent = Semestre;
      celdaFecha.textContent = Materia;
      celdaFecha.textContent = Profesor;
      celdaFecha.textContent = Horario;

 
      document.getElementById("formulario-alumno").reset();
    });
  </script>


    
    

         
         
    
      <body style="background-color: #f0f0f0">
</table>
</body>
</html>