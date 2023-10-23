<?php
session_start();

// Comprobar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    echo "No se ha iniciado sesión.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seguimiento de Estudiantes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
<form method="post" action="horario.php">
        <input type="submit" value="Horarios">
    </form>
    <form method="post" action="alumnos.php">
        <input type="submit" value="Alumnos">
    </form>
    <form method="post" action="formato3.php">
        <input type="submit" value="Formato">
    </form>
    <?php
    // Supongamos que tienes información de seguimiento en un arreglo de datos
    $seguimiento = [
        ["1er Semestre", "Matemáticas", "Examen 1", 2, 85],
        ["1er Semestre", "Matemáticas", "Tarea 1", 0, 95],
        ["2do Semestre", "Historia", "Examen 1", 3, 78],
        // Agrega más datos aquí
    ];

    // El resto del contenido de la página principal
    // Puedes agregar aquí el contenido que deseas mostrar a los usuarios autenticados
    echo "Seguimiento De Estudiantes, " . $_SESSION['usuario'];

    // Agrega la tabla con clases de Bootstrap
    echo '<div class="container">';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Semestre</th>';
    echo '<th>Materias</th>';
    echo '<th>Actividad</th>';
    echo '<th>Faltas</th>';
    echo '<th>Promedio</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($seguimiento as $fila) {
        echo '<tr>';
        echo '<td>' . $fila[0] . '</td>';
        echo '<td>' . $fila[1] . '</td>';
        echo '<td>' . $fila[2] . '</td>';
        echo '<td>' . $fila[3] . '</td>';
        echo '<td>' . $fila[4] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';


    
    ?>
</body>
</html>
