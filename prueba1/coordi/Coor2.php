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
            font-size: 16px;
            cursor: pointer;
            border: none;
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
          
            <li><a href="#">Alumnos</a></li>
            <li><a href="#">5.0</a></li>
            <li><a href="#">Seguimiento</a></li>
            
            <button id="salir" onclick="salir()">Salir</button>
        </ul>
     
    </div>
    <pre>
    </pre>
    
    <script>
        function salir() {
            
           // alert("Saliendo de la aplicación");
            window.location.href = '../cerrar_sesion.php';
        }
    </script>
  </style>
</head>
<body>
  
  
    </head>
    <body>
    
      <title>Coordinador Seguimiento</title>
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
    
    <p style="text-align: left;">Coordinador: Mauricio Campos </p>
    <p style="text-align: left;">Matricula: 32154686</p>
    <p style="text-align: left;">Componente: Programación</p>
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

</head>
<body>
  

  
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
<body>

  <h1>Seguimiento de Estudiantes</h1>

  
  <form id="formulario-estudiante">
    <label for="matricula">Matricula:</label>
    <input type="text" id="matricula" name="matricula" required>
    <label for="nombre">Nombre del Alumno:</label>
    <input type="text" id="nombre" name="nombre" required>
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required>

    <label for="completado">Completado:</label>
    <pre>
    </pre>
    <input type="checkbox" id="completado" name="completado">
    
    <label for="firma">Firma del Coordinador:</label>
    <canvas id="firma" class="firma" width="200" height="100"></canvas>

    <button id="limpiar-firma">Limpiar Firma</button>

    <input type="submit" value="Registrar">
  </form>

  <h2>Lista de Estudiantes y Actividades</h2>
  <table>
    <tr>
      <th>Matricula</th>
      <th>Nombre del Alumno</th>
    
      <th>Fecha</th>
      <th>Completado</th>
      <th>Firma</th>
    </tr>
  </table>

  <script>
    const formulario = document.getElementById("formulario-estudiante");
    const tabla = document.querySelector("table");
    const limpiarFirma = document.getElementById("limpiar-firma");

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
      const celdaFecha = fila.insertCell(2);
      const celdaCompletado = fila.insertCell(3);
      const celdaFirma = fila.insertCell(4);

      celdaNombre.textContent = nombre;
      
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



           
        
        
</table>
    
       
         
         
    
      <body style="background-color: #f0f0f0">
</table>
</body>
</html>