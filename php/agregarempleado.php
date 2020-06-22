<?php
include ("basededatos.php"); // incluimos el archivo basededatos.php para poder utilizar sus funciones
if(!empty($_POST['empleado_nombre']) && !empty($_POST['empleado_edad'])) // revisa que el usuario
                                                                         // no haya enviado campos vacios
{
    $conexionbd = conectar_bd(); // iniciamos la conexión
    $query = "INSERT INTO empleado (nombre, edad) VALUES              
                ('".$_POST['empleado_nombre']."','".$_POST['empleado_edad']."')"; // se almacena en la variable $query la sintaxis de SQL insert
    $exito = mysqli_query($conexionbd, $query); //se usa la variable msqli_query con los parametros conexiónbd y query
    if($exito)
    {
            header('Location: listaempleadoss.php'); // para dirigir a una lista de empleados que crearemos más adelante
    }
    else
    {
            header('Location: nuevoempleado.php'); // redirige si no se iso la insercción de manera correcta
    }
}
else
{
    header('Location: nuevoempleado.php'); // redirige a nuevoempleado.php si los campos estan vacios
}

?>