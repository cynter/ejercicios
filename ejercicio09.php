<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$lapicera0 = array('color' => 'negro','marca' =>'bic','trazo'=>'fino','precio'=>'caro');

	$lapicera1 = array('color' => 'azul','marca' =>'faber','trazo'=>'grueso','precio'=>'barato');

	$lapicera2 = array('color' => 'rojo','marca' =>'pelican','trazo'=>'medio','precio'=>'razonable');

	for ($i=0; $i <3 ; $i++) { 
		foreach (${"lapicera$i"} as $key => $value) {
			echo $key . "->" . $value. "<br>";
		}
		echo "<br>";
	}

 ?>

</body>
</html>