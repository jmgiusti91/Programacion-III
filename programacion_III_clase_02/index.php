<html>
<head>
	<title></title>
</head>
<body>
	<h1>Juan Giusti</h1>
	<?php
	/*include_once"alumno.php"; el once es para que incluya una sola vez la pagina*/
	require_once"alumno.php";
	/*require_once"mascota.php";Si no anda el archivo, tira en error. En cambio el include tira solo una advertencia */
		echo "Hola";
		$nombre = "Juan";
		echo "<br>";
		echo "<h1>".$nombre."</h1>";
		print("Su nombre es: ".$nombre);
		$numero = 17;
		if ($numero > 18) {
			echo "<br>Es mayor de edad.";
		} else{
			echo "<br>Es menor";
		}
		$miArray = array(1, 2, 3, 4, 5, 6, 7);
		foreach ($miArray as $elemento) {
		 	echo "<br>".$elemento."<br>";
		 }
		 var_dump($miArray);
		 echo "<br>";

		 $miNuevoArray = array("pizza" => 20, "Coca Cola" => 25, "Empanada" => 15);
		 var_dump($miNuevoArray);
		 echo "<br>";
		 echo $miNuevoArray["pizza"];
		 echo "<br>";
		 echo "<br>";
		 echo "<br>";


		 $arrayClaveValor = array("nombre"=>"Juan", "apellido"=>"Giusti", "Soltero"=>true, "Fecha de nacimiento"=>date(07-03-91));
		 var_dump($arrayClaveValor);
		 echo "<br>";

		 $arrayVacio = array();
		 $arrayVacio[0] = "Hola";
		  $arrayVacio[] = "<br>"."Chau";
		  var_dump($arrayVacio);
		  echo "<br>";
		  $arrayVacio[] = $miNuevoArray;
		  var_dump($arrayVacio);
		  echo "<br>";
		  echo "<br>";
		  $arrayVacio["Productos"] = $miNuevoArray;
		 var_dump($arrayVacio);
		 echo "<br>";
		 echo "<br>";
		 echo $arrayVacio["Productos"]["pizza"];
		 echo "<br>";

		 /*NOTA IMPORTANTE: Para asignar un par clave valor usamos '=>', en cambio para establecer un atributo de un array o clase usamos '->'*/

		 $miObjeto = new stdclass();/*Array de object*/
		 $miObjeto->nombre="Juan";/*No poner espacios*/
		 $miObjeto->apellido="Giusti";
		 $miObjeto->soltero=true;
		 $miObjeto->fecha="03/07/91";
		 $miObjeto->Productos=$miNuevoArray; 
		 var_dump($miObjeto);
		 echo "<br>";
		 echo $miObjeto->nombre;
		 echo "<br>";
		 echo "<br>";
		  	

		  	$yo = new Alumno();
		  	$yo->nombre="Juan";
		  	$yo->apellido="Giusti";
		  	$yo->fecha_de_nacimiento="03/07/91";

		  	var_dump($yo);

		  	$yo->Mostrar();
		  	$yo->soltero=true; /*Se agrega atributo dinamicamente*/
		  	Alumno::MostrarEstatico($yo); /*Asi se invoca un metodo estatico */
		  	echo $yo->nombre;
		  	echo "<br>";

		  	foreach ($yo as $atributo) {
		  		var_dump($atributo);
		  	}

		  	echo "<br>";
		  	/*echo $yo["nombre"]; Esto no se puede hacer*/

		  	echo "<br>";
		  	/*echo $miNuevoArray->nombre; Esto tampoco se puede hacer*/




	?>
</body>
</html>