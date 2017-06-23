<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Funções Aritmeticas</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php
			$v1 = $_GET["x"];
			$v2 = $_GET["y"];
			echo "<h2>Valores Recebidos: $v1 e $v2 </h2>";
			echo "O valor absoluto de $v2 é ". abs($v2);
			echo "<br/>O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2);
			echo "<br/>A Raiz de $v1 é ". sqrt($v1);
			echo "<br/>O valor de $v2 arredondado é ". round($v2);
			echo "<br/>A parte inteira de $v2 é ". intval($v2);
			echo "<br/>O valor de $v1 em moeda é R$". number_format($v1,2,",","."); 
		?>
	</div>	
</body>
</html>