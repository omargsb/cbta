<?php
include("basededatos.php");// incluimos el archivo basededatos.php
$conexionbd = conectar_bd(); // llamamos a la función conectar_bd y almacenamos en la variable $conexionbd
$query = "SELECT id,nombre,edad FROM empleado;"; // Seleccionamos id, nombre y edad de la tabla empleado, para guardar en a variable $query
$resultado = mysqli_query($conexionbd, $query); //usamos la variable mysqli_query con parametros, para guardar en la variable $resultado
mysqli_close($conexionbd); // Cerramos la conexión con la base de datos 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- para desplegar el resultado en la pantalla -->
    <h1>Lista de empleado</h1>
    <ul>
        <?php
            while($registro = mysqli_fetch_assoc($resultado)) //obtenemos los registros devueltos en la variable $resultado
            {
                echo '<li>'.$registro['nombre'].'('.$registro['edad'].'años)';
                echo '<a href="modificarempleado.php?empleadoid='.$registro['id'].'">Modificar</a></li>';// estos vínculos nos serviran 
                echo '<a href="eliminarempleado.php?empleadoid='.$registro['id'].'">Eliminar</a></li>';  // mas adelante
             }

        ?>
    </ul>
</body>
</html>