<?php
require ('../Mvc_php7/persona.php');
require ('../Mvc_php7/funcion.php');

$nombre =funcion::data('nombre');
$apellido=funcion::data('apellido');
$direccion=funcion::data('direccion');



//instancia de la clase
$persona = new persona ();
//asignar un nombre
$persona->setNombre($nombre);
$persona-> setApellido($apellido);
$persona->setDireccion($direccion);

//***************************************************************************




//Conexion bbdd  e insertar
$db = mysqli_connect ( 'localhost', 'root', '', 'nad' ) or die ( 'Error al conectar al servidor' );

$query ="INSERT INTO persona (nombre,apellido,direccion)VALUES('$nombre','$apellido','$direccion');";
mysqli_query ( $db, $query );





//resultado en html

echo "<br/>Nombre: ".$persona->nombre;
echo "<br/>Apellido: ".$persona->apellido;
echo "<br/>Direccion: ".$persona->direccion;


?>
