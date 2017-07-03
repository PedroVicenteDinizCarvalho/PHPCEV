<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Rotinas externas PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			require "funcoes-externas.php";
			echo "Testando Funções Externas <br/>";
			ola();
			echo "<br/>";
			mostraValor(4);
			echo "<br/>";
			echo "Finalizando programa";
		?>
	</div>	
</body>
</html>