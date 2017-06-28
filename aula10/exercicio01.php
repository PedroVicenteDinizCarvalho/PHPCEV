<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php
			$n=isset($_GET["num"])?$_GET["num"]:0;
			$o=isset($_GET["oper"])?$_GET["oper"]:1;
		?>
</head>
<body>
	<div class="Container">
		<?php
			switch($o){
				case 1:
					$r=$n*2;
					break;
				case 2:
					$r=$n^3;
					break;
				case 3:
					$r=sqrt($n);
			}
			echo "O resultado da operação solicitada foi " .number_format($r);
		?>
	</div>
		<a href="exercicio01.html">Voltar</a>	
</body>
</html>