<?php
$db = mysqli_connect ( 'localhost', 'root', '', 'nad' ) or die ( 'Error al conectar al servidor' );

$query = 'INSERT INTO persona (nombre,apellido,direccion)VALUES($nombre,$apellido,$direccion)';
mysqli_query ( $db, $query );


