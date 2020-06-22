<?php
include("basededatos.php");
$conexionbd = conectar_bd ();
$id = $_GET['empleadoid']; // Guardamos en la variable $id el valor de empleadoid
$query ="SELECT id,nombre,edad FROM empleado WHERE id= $id LIMIT 1"; // Hacemos la consulta donde WHERE es DONDE el empelado a sido seleccionado
$resultado = mysqli_query($conexionbd, $query); // al ejecutar la consulta de arriba, el resultado se guarda en $resultado
mysqli_close($conexionbd); // Cerramos la conexión a la base de datos
$registro = mysqli_fetch_assoc($resultado); //obtenemos el registro del resultado y lo guardamos en $registro
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Modificar Empleado</title>
</head>
<body>
<form action="actualizarempleado.php" method="POST" name="nuevoempleado"> <!--llamamos al archivo actualizarempleado.php-->
    <input type="text" name="empleado_nombre" value="<?php echo $registro['nombre'] ?>"><!-- Para que se modifique el nombre-->
     <br>
     <input type="number" name="empleado_edad" value="<?php echo $registro['edad'] ?>"><!-- Para que se modifique la edad-->
     <br>
     <input type="hidden" name="empleado_id" value="<?php echo $registro['id'] ?>"><!-- Permanece oculto-->
     <input type="submit" name="Actualizar empleado"> <!-- Botón actualizar-->
    </form>
</body>
</html>