<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Igual e Identico</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php 
			$a = 3;
			$b = "3";
			$r = $a==$b?"SIM":"NÃO";
			echo "As variaveis são iguais? $r <br/>";

			$r2 = $a===$b?"SIM":"NÃO";
			echo "As variaveis são identicas? $r2"
		?>
	</div>
</body>
</html>