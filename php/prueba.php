<?php
include("basededatos.php"); // comenzamos incluyendo el archi basededatos.php

$conexionbd = conectar_bd(); // Creamos una variable $conexionbd y se le asigna
                             // el valor devueto en la funcion conectar_bd
echo "Se conecto correctamente a la base de datos"; // Imprimimos en pantalla el valor de conexionbd
mysqli_close($conexionbd); // Cerramos la conexión usando el parametro $conexionbd
