<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Str_split PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$nome="Maria";
			$vetor=str_split($nome);
			print_r($vetor);
		?>
	</div>
</body>
</html>