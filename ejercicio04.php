<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$simbolos = array('+', '-', '/', '*');
	$operador = '+';
	$op1 = 15;
	$op2 = 5;
	switch ($operador) {
		case '+':
			$resultado = $op1 + $op2;
			break;
		case '-':
			$resultado = $op1 - $op2;
			break;
		case '/':
			$resultado = $op1 / $op2;
			break;
		case '*':
			$resultado = $op1 * $op2;
			break;
		default:
			echo 'Error en switch';
			break;
	}
	echo "$op1 $operador $op2 = $resultado";
	?>

</body>
</html>