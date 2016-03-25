<?php
	class Cuenta {
		public $nombreCliente;
		public $numeroCuenta;

		private function RetornarDatos(){
			echo "<br> El nombre del cliente es: ".$this->nombreCliente."<br>Numero de cuenta: ".$this->numeroCuenta;
		}

		public static function Mostrar($unaCuenta){
			$unaCuenta->RetornarDatos();
		}

		public static function SumarCuentas($unaCuenta, $otraCuenta){
			if ($unaCuenta->nombreCliente == $otraCuenta->nombreCliente) {
				return $unaCuenta->importe + $otraCuenta->importe;
			} else{
				echo "<br>Las cuentas no son del mismo propietario";
			}
		}

		public function SumarImporte($credito){
			return $this->importe += $credito;
		}

		public function RestarImporte($debito){
			if ($this->importe >= $debito) {
				$this->importe-=$debito;
			} else{
				echo "<br>No dispone de saldo suficiente para realizar debito";
			}
		}
	}
?>