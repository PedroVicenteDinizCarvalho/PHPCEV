<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Eleições</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php
			$ano=$_GET["an"];
			$idade=2017-$ano;
			echo "Quem nasceu em $ano tem idade de $idade anos";
			$tipo=$idade>=18&&$idade<65?"Obrigatório":"Facultativo";
			echo " e dessa forma seu voto é $tipo"
		?>
	</div>
</body>
</html>