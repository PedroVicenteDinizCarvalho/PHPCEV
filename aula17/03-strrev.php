<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Strrev PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$nome="Pedro Vicente";
			$nomereverse=strrev($nome);
			echo "Seu nome ao contrário é $nomereverse";
		?>
	</div>
</body>
</html>