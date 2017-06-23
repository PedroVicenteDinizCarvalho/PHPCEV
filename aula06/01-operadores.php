<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Operadores</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php
			$preco = $_GET["p"];
			echo "O preço do produto é: R$". number_format($preco,2,",",".");
			$preco = $preco + ($preco *10/100);
			echo "<br/>E o novo preço com 10% de aumento sera: R$". number_format($preco,2,",",".");
		?>
	</div>	
</body>
</html>