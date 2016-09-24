<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>
			Ejercicio 2 - Clase 5
		</title>
	</head>
	<body>
	<!--Codigo-->
	<?php
		class Persona
		{
			public $Nombre;
			public $Apellido;
			public $Edad=54;
			public $pass="12345";
			public $Usuario="Temporal";

			public function __construct($Nombre,$Apellido)
			{
				$this->Nombre=$Nombre;
				$this->Apellido=$Apellido;
				
			}

			public function Validar($Us)
			{
				if($this->Usuario===$Us)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}

		$N=$_REQUEST["nombre"];
		$A=$_REQUEST["apellido"];
		$P=$_REQUEST["password"];
		$U=$_REQUEST["usuario"];
		$Temp="Jorge";

		//Validamos la accion
		if(isset($_POST['enviar']))
		{
			//Instancia
			$individuo=new Persona($N,$A,$U);
			echo $individuo->Nombre;
			echo "<br>";
			echo $individuo->Apellido;
			echo "<br>";
			echo $individuo->Edad;

			if($individuo->Validar($U))
			{
				echo "<br>";
				echo "su Usuario coincide";
				echo "<br>";
			}
			else
			{
				echo "<br>";
				echo "Usuario no existe";
				echo "<br>";				
			}

			if($individuo->pass===$P)
			{
				echo "<br>";
				echo "Password coincide, Bienvenido";
				echo "<"."<input type='text' name='nombre' value=$A>";
				echo "<br>";
			}
			else
			{
				echo "<br>";
				echo "<h2>Password no coincide</h2>";
				echo "<br>";
			}

			
			/*if($ret===1)
			{
				echo $individuo->Usuario;
			}*/

		}

	?>

	<!--Formulario-->
		<form name="Persona" action="ejercicio2.php" method="POST">
			<label>Nombre: </label><input type="text" name="nombre">
			<br>
			<label>Apellido: </label><input type="text" name="apellido">
			<br>
			<label>Password: </label><input type="password" name="password">
			<br>
			<label>Usuario: </label><input type="text" name="usuario">
			<br>
			<input type="submit" value="enviar" name="enviar" class="btn btn-success">
		</form>
	</body>
</html>