<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Ucfirst e Ucwords PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$nome="pedro vicente";
			$nome2=ucfirst($nome);
			echo "Seu nome é $nome2";
			echo "<br/>";
			$nome3=ucwords($nome);
			echo "Seu nome é $nome3";
		?>
	</div>
</body>
</html>