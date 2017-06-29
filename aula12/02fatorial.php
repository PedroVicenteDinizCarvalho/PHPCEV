<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Fatorial</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php
			$nome=isset($_GET["nome"])?$_GET["nome"]:"Fulano";
			$v=isset($_GET["v"])?$_GET["v"]:0;
			$cont=$v;
			$r=1;
		?>
</head>
<body>
	<div class="Container">
		<?php
			echo "Ola $nome o fatorial de $v é <br/>";
			do{
				$r=$r*$cont;
				$cont-=1;
			}while($cont>=1);
			echo $r;
		?>
	</div>
	<a href="02fatorial.html">Voltar</a>	
</body>
</html>