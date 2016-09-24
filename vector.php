<!DOCTYPE html>
<html>
	<head>Clase 5</head>
	<body>
	<?php
		if(isset($_POST['vec']))
		{
			$vector=$_POST['vec'];
			$n=count($vector);
			$suma=0;
			echo "el vector tiene $n elementos <br>";

			for($i=0;$i<$n;$i++)
			{
				echo "$i=$vector[$i]<br>";
				$suma=$suma+$vector[$i];
			}

			echo " la suma es $suma <br>";
		}
	?>
	<!--Formulario-->
	<form action="vector.php" method="post">
		<?php
			$n=8;
			for($i=0;$i<=$n;$i++)
			{
				echo $i;1 echo "<input type='text' name='vec[]' size='10'>";
				echo "<br>";
			}
		?>
		<input type="submit">
	</form>

	</body>
</html>
