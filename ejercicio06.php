<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$array;
		$acum=0;

		for ($i=0; $i < 4; $i++) { 
			$array[$i]=rand(0,12);

			$acum+=$array[$i];
		}

		$promedio=$acum/5;

		switch ($promedio) {
			case $promedio>6:
				echo "Promedio es mayor a 6<br>".$promedio;
				break;

			case $promedio<6:
				echo "Promedio es menor a 6<br>".$promedio;
				break;	

			case $promedio==6:
				echo "Promedio es igual a 6<br>".$promedio;
				break;
						
		}


	 ?>

</body>
</html>