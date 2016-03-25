<?php
	include_once"cuenta_bancaria.php";

	$cuenta1 = new Cuenta();
	$cuenta1->nombreCliente="Juan Giusti";
	$cuenta1->numeroCuenta=123456;
	Cuenta::Mostrar($cuenta1);
	echo "<br>";
	echo "<br>";
	echo "<br>";

	$cuenta1->importe=100;

	$cuenta2 = new Cuenta();
	$cuenta2->nombreCliente="Jose Pepe";
	$cuenta2->numeroCuenta=987654;
	$cuenta2->importe=200;

	echo Cuenta::SumarCuentas($cuenta1, $cuenta2);

	echo "<br>";
	echo "<br>";

	$cuenta3 = new Cuenta();
	$cuenta3->nombreCliente="Juan Giusti";
	$cuenta3->numeroCuenta=13579;
	$cuenta3->importe=300;

	echo Cuenta::SumarCuentas($cuenta1, $cuenta3);
	echo "<br>";
	echo "<br>";

	echo $cuenta3->SumarImporte(500);
	echo "<br>";
	echo "<br>El saldo actual de la cuenta 3 es de: ".$cuenta3->importe;
	echo "<br>";

	$cuenta3->RestarImporte(700);
	echo "<br>";
	echo "<br>A la cuenta 3 se le resto 700, quedando un importe de: ".$cuenta3->importe;

	echo "<br>";
	echo $cuenta3->RestarImporte(500);
	echo "<br>Por ultimo, se desea restarle 500, y como no alcanza el importe sigue siendo de: ".$cuenta3->importe;

?>