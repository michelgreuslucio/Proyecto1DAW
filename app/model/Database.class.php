<?php
	class Database {
		private $conexion;

		public function conectar() {
			if(!isset($this->conexion)) {
				$this->conexion = (mysqli_connect("localhost", "root", "", "termibux")) or die(mysqli_error());
			}
		}

		public function consulta($consulta) {
			return mysqli_query($this->conexion, $consulta);
		}

		public function desconectar() {
			mysqli_close($this->conexion);
		}

		function numeroFilas($result){	
			return mysqli_num_rows($result);

		}

		function datosArray($result){
			return mysqli_fetch_object($result);
			
		}
	}
?>