<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$d=isset($_GET["ds"])?$_GET["ds"]:0;

		?>
</head>
<body>
	<div class="Container">
		<?php 
			switch($d){
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "Levanta e vai estudar!";
					break;
				case 7:
				case 8:
					echo "Se possivel estude mas hoje é dia de descanso";
					break;
				default:
					echo "Dia da semana invalido";
			}
		?>
	</div>
		<a href="exercicio02.html">Voltar</a>	
</body>
</html>