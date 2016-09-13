<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	//var_dump(pow(2, 8)); // int(256)
	echo "2 elevado 5 = ".pow(2, 5);
	echo "<br>";

	function Potencia($base){
	echo "------$base------<br>";
		for ($i=1; $i < 5; $i++) {
			echo pow($base, $i) . '<br>';
		}
	}

	for ($i=1; $i < 5; $i++) {
		Potencia($i);
	}
	
 ?>

</body>
</html>