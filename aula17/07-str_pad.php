<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Str_pad PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$nome="Pedro";
			$novo=str_pad($nome, 30, " ", STR_PAD_RIGHT);
			print ("O $novo esta estudando bastante programação de computadores");
		?>
	</div>
</body>
</html>