<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 02</title>
</head>
<body>

	<?php 

		echo 'Hoy es ' . date('d/m/y') . '<br>';
		echo 'En ingles ' . date('l jS \of F Y');

		//$date=date_create("2013-03-15");
		//echo date_format($date,"Y/m/d H:i:s");

		echo "<br>";

		$mes = date('m');
		$dia = date('j');

		switch($mes)
		{
			case 1:
					echo "Estamos en Verano"; 
					break;

			case 2: 
					echo "Estamos en Verano";
					break;
	
			case 3:
					echo $dia < 21?"Estamos en Verano":"Estamos en Otoño";
					break;

			case 4:
					echo "Estamos en Otoño"; 
					break;

			case 5:
					echo "Estamos en Otoño"; 
					break;

			case 6:	
					echo $dia < 21?"Estamos en Otoño":"Estamos en Invierno"; 
					break;

			case 7: 
					echo "Estamos en Invierno"; 
					break;

			case 8: 
					echo "Estamos en Invierno"; 
					break;

			case 9:	
					echo $dia < 21?"Estamos en Invierno":"Estamos en Primavera"; 
					break;

			case 10: 
					echo "Estamos en Primavera"; 
					break;

			case 11:
					echo "Estamos en Primavera"; 
					break;

			case 12: 
					echo $dia < 21?"Estamos en Primavera":"Estamos en Verano"; 
					break;

		}

	?>

</body>
</html>