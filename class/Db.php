<?php
class Db{
	
	function __construct(){
		//abrir conexion a la base de datos
	}
	
	abstract function select($query);
	abstract function insert($query);
	abstract function update($query);
	abstract function delete($query);
	abstract function dump($query);
	
}