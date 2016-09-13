<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	echo strrev("Hello world!"); // outputs "!dlrow olleH"
	echo "<br>";
	echo "<br>";


	function Invertir($palabra){
		return strrev($palabra);
	}

	echo "Hola => ", Invertir("Hola");

 ?>

</body>
</html>