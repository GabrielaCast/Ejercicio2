<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>DATOS</title>
	</head>
	<body>
		<div class="row">
			<h1>CALCULAR</h1>
		</div>
		<div class="row">
			<h2>Valores de Entrada:</h2><br>
			<?php
				$V1=2;
				$V2=1;
				$RS=$V1+$V2;
				$RR=$V1-$V2;
				$RM=$V1*$V2;
				$RD=$V1/$V2;

				echo "<br>";
				echo "<h3>V1: </h3>".$V1;
				echo "<br>";
				echo "<h3>V2: </h3>".$V2;
				echo "<br>";
				echo "La suma es ".$RS;
				echo "La Resta es ".$RR;
				echo "La Multiplicacion es ".$RM;
				echo "La Division es ".$RD;
			?>
			<a href="index.html">VOLVER</a>
		</div>
		<div class="row">
			<p>GABRIELA CASTELLANOS</p>
			<p>13 de Agosto del 2016</p>
		</div>

	</body>
</html>