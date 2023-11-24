
<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        
<<<<<<< HEAD
=======
        
>>>>>>> 77b83cebefd46e1ae71b50ab3e3c5bc89db09dde
        body {
            background-color: #f0cf89;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .login-container {
            background-color: #fff;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 60%;
            background-color: #56f051;
            color: #141313;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #e9a846;
            
        }
        
    </style>
    <style>
        body {
          border: 30px solid #a7f7ae; 
          padding: 20px; 
        }
      </style>
</head>
<body>
<<<<<<< HEAD
   
    
                <img src="sin.png" alt="Descripción de la imagen" width="235" height="90">
            
=======
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos.css">
    
                <img src="Imagenes\sin.png" alt="Descripción de la imagen" width="235" height="90">
               
>>>>>>> 77b83cebefd46e1ae71b50ab3e3c5bc89db09dde
                </pre>
                <pre>
                </pre>
                
    <div class="login-container">
        <h2>Bienvenidos</h2>
<<<<<<< HEAD
        <pre>
        </pre>
        <p align="center">
        <form action="login.php" method="post"> 
            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula" name="matricula" required>
     
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <input type="submit" value="Entrar">
        </form>
=======
      
      
      
      <?php
            session_start();
            if(isset($_SESSION['error_message'])) {
                echo '<div style="color: #ff0000; margin-top: 10px;">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
        ?>


        <pre>
        </pre>
        <p align="center">
            <form action="login.php" method="post"> 
                <label for="matricula">Matricula:</label>
                <input type="text" id="matricula" name="matricula" required>
         
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
    
                <input type="submit" value="Entrar">
            </form>            
>>>>>>> 77b83cebefd46e1ae71b50ab3e3c5bc89db09dde
    </div>
    <footer>
        <p align="center">
          &copy; cecyteh 2023 - Todos los derechos reservados
        </p> 
      </footer>
</body>
</html>
</html>



