<?php

abstract class Database {
	protected $conexion;
	protected $result;

	public function __construct() {
		if(!isset($this->conexion)) {
			if($this->conexion = mysqli_connect("localhost", "root", "", "mydb")) {
				return true;
			}
			else {
				echo "No se ha podido realizar conexion con la base de datos: ".mysqli_connect_error();
				return false;
			}
		}
	}

	public function __destruct() {
		if(isset($this->result) && is_a($this->result, "mysqli_result")) {
			mysqli_free_result($this->result);
		}
		mysqli_close($this->conexion);
	}

	protected function query($query) {
		if($this->result = mysqli_query($this->conexion, $query)) {
			return $this->result;
		}
		else {
			return false;
		}
	}
}

?>