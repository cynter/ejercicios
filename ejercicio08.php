<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	$array = array(1 => 90, 30=> 7, 'e'=>99, 'hola'=>'mundo');

	foreach ($array as $index => $value) {
		echo $index . "=>" . $value."<br>";
	}
 ?>

</body>
</html>