<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Valor</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php
			$valor=$_GET["v"];
			$rq=sqrt($valor);
			echo "A raiz de $valor é igual á ".number_format($rq,2);
		?>
	</div>
		<a href="01-exercicio.php"> Voltar </a>
</body>
</html>