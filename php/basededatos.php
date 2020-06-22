<?php
function conectar_bd() // Agregamos una función nueva
{
    // Creamos las variables: servidor, nombrebd, usuario y contraseña
    $servidor = "localhost"; // localhost porque estamos usando un servidor local
    $nombrebd = "empresa"; // Es el nombre de la base de datos que creamos anteriormente
    $usuario = "root"; // Es el nombre del usario, esto esta configurado en Xampp
    $contrasena = "root"; // También esta contraseña se encuentra configurada en Xampp
                          // Si quieren cambiar el usuario y contraseña agregare un video a la plataforma

        $conexion = mysqli_connect ($servidor, $usuario, $contrasena); // Para conectarnos al servidor de la base de datos
                                                                       // y se guarda la variable en $conexion
        mysqli_select_db ($conexion, $nombrebd);  //seleccionamos la base de datos

    return $conexion; //devolver la variable $conexion
}
?>