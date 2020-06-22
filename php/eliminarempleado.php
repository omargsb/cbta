<?php
include ("basededatos.php"); // incluimos el archivo basededatos.php para poder utilizar sus funciones
if(!empty($_GET['empleadoid'])) // revisa que el usuario
                                                                         // no haya enviado campos vacios
{
    $conexionbd = conectar_bd(); // iniciamos la conexión
    $query = "DELETE FROM empleado WHERE id=".$_GET['empleadoid']; // se almacena en la variable $query la sintaxis de SQL delete
    $exito = mysqli_query($conexionbd, $query); //se usa la variable msqli_query con los parametros conexiónbd y query
    mysqli_close($conexionbd);
    
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