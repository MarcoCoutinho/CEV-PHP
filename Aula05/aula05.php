<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<div>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$m = ($n1 + $n2) / 2;

		echo "<h2>Valores recebidos: $n1 e $n2</h2>";
		echo "A soma vale ". ($n1 + $n2);
		echo "<br />A subtracao vale ". ($n1 - $n2);
		echo "<br />A multiplicacao vale ". ($n1 * $n2);
		echo "<br />A divisao vale ". ($n1 / $n2);
		echo "<br />O modulo vale ". ($n1 % $n2);
		echo "<br />A media vale $m";


	?>

	</div>
	</body>
</html>