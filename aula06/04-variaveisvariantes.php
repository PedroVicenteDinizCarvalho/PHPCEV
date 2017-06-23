<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Variaveis Variantes</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php
			$x = "abc";
			$$x = "def";
			echo "O conteudo da variavel X é $x";
			echo "<br/>A variavel criada recebeu o valor $abc";
		?>
	</div>
</body>
</html>