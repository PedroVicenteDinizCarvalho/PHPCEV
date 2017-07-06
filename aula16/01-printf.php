<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Printf PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php 
			$p="Leite";
			$pr=4.5;
			printf("O %s custa R$ %.2f", $p, $pr);
		?>
	</div>
</body>
</html>