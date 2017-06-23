<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Referencia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php
			$a = 3;
			$b = &$a;
			$b += 5;
			echo "<br/> A variavel A vale $a";
			echo "<br/> A variavel B vale $b";
		?>
	</div>
</body>
</html>