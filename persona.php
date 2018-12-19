<?php
class persona{
public $nombre;
public  $apellido;
public $direccion;
//getters
public function getNombre(){
	return  $this->nombre;
}
public function getApellido(){
	return $this->apellido;
}
public function getDireccion(){
	return $this-> direccion;
}
//setters
public function setNombre($nombre){
	$this-> nombre = $nombre;
}
public function setApellido($apellido){
	$this-> apellido= $apellido;
}
public  function setDireccion($direccion){
	$this ->direccion=$direccion;
}
}
