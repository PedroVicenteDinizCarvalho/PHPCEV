<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tabuada</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php 
			$nome=isset($_GET["nome"])?$_GET["nome"]:"Fulano";
			$valor=isset($_GET["v"])?$_GET["v"]:1;
			$i=1;
		?>
</head>
<body>
	<div class="Container">
		<?php 
			echo "Olá $nome a tabuada de $valor é <br/>";
			do{
				$r=$valor*$i;
				echo "$valor x $i = $r <br/>";
				$i+=1;
			}while($i<=10);
		?>
	</div>
		<a href="desafiotabuada.html">Voltar</a>		
</body>
</html>