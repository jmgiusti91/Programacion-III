<?php
	class Alumno
		  	{	
		  		public $nombre;
		  		public $apellido;
		  		public $fecha_de_nacimiento; /*Solo aca van el signo pesos. al invocarlo no*/

		  		public function Mostrar(){
		  			$this->RetornarDatos();
		  		}

		  		private function RetornarDatos(){
		  			echo "<br>"."Su nombre es: ".$this->nombre." su apellido es: ".$this->apellido."<br>";
		  		}

		  		public static function MostrarEstatico($unAlumno){ /*Si bien funciona igual, no poner nombre de la clase en los parametros de los metodos estaticos*/
		  			$unAlumno->Mostrar();
		  		} 
		  	} 
?>