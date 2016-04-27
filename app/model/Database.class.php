<?php
	class Database {
		private $conexion;

		public function conectar() {
			if(!isset($this->conexion)) {
				$this->conexion = (mysqli_connect("localhost", "root", "", "database")) or die(mysqli_error());
			}
		}

		public function consulta($consulta) {
			return mysqli_query($this->conexion, $consulta);
		}

		public function desconectar() {
			mysqli_close();
		}
	}
?>