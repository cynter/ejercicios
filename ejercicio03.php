<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
		$a = rand(0, 100);
		$b = rand(0, 100);
		$c = rand(0, 100);
		echo $a . '<br>';
		echo $b . '<br>';
		echo $c . '<br>';
		
		$array = array($a,$b,$c);

		var_dump($array);
		echo "<br>";

		sort($array);

		var_dump($array);


		if ($array[0]==$array[1] || $array[1]==$array[2]) {

			echo "No hay valor del medio";
		}
		else{
		echo "<br>";

			echo $array[1];
		}

 ?>

</body>
</html>