<?php
// Parametros a configurar para la conexion de la base de datos.

$hotsdb = '';            // sera el valor de nuestra BD
$basededatos = '';    // sera el valor de nuestra BD

$usuariodb = '';    // sera el valor de nuestra BD
$clavedb = '';    // sera el valor de nuestra BD

//$tabla_db = 'cerveceria';    // sera el valor de una tabla

// Fin de los parametros a configurar para la conexion de la base de datos.

// Generar conexion.
$conexion_db = new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos)
or die ("Conexi�n denegada, el Servidor de Base de datos que solicitas NO EXISTE");
?>
