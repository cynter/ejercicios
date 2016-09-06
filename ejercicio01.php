<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 01</title>
</head>
<body>

	<?php 
		
		$suma = 1;

		for ($i=1; $suma < 1000 ; $i++)
		{ 
			$suma = $suma + $i + 1;
			echo "$i<br>";
		}

		echo "Se sumaron " . ($i - 1) . " numeros.";

 	?>

</body>
</html>
