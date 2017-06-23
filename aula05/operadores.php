<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Operadores</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			echo "<h2>Valores recebidos: $n1 e $n2</h2>";
			$m = ($n1 + $n2) / 2;
			echo "A soma de $n1 com $n2 vale ". ($n1 + $n2);
			echo "<br/> A Subtração de $n1 com $n2 vale ".
				($n1 - $n2);
			echo "<br/> A Multiplicação de $n1 com $n2 vale ". ($n1 * $n2);
			echo "<br/> A Divisão de $n1 com $n2 vale ".
				($n1 / $n2);
			echo "<br/> O Modulo de $n1 com $n2 é ". 
				($n1 % $n2);
			echo "<br/> A media entre $n1 e $n2 é $m";
		?>
	</div>	
</body>
</html>