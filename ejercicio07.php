<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	$array=array();

	for ($i=0; count($array) <=10; $i++) { 
		if ($i%2 !=0) {
			$array[]=$i;

		}

	}

	for ($i=0; $i <11; $i++) { 
		echo $array[$i]."<br>";		
	}

	echo "Con While<br>";

$i=0;
	while ($i<11) {
		echo $array[$i]."<br>";
		$i++;		
	}

	echo "Con foreach<br>";

	foreach ($array as $e) {
		echo $e."<br>";
		
	}

	
 ?>

</body>
</html>