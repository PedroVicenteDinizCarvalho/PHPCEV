<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Função com PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php
			function soma($a, $b){
				$s=$a+$b;
				echo "A soma vale $s <br/>";
			}
		?>
</head>
<body>
	<div class="Container">
		<?php
			soma(3, 4);
			soma(8, 2);
			$x=9;
			$y=1;
			soma($x, $y);
			$v1=isset($_GET["v1"])?$_GET["v1"]:0;
			$v2=isset($_GET["v2"])?$_GET["v2"]:0;
			soma($v1, $v2);
		?>
	</div>
	<a href="01-funcao.html">Voltar</a>	
</body>
</html>