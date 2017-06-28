<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Desafio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$e=isset($_GET["estado"])?$_GET["estado"]:0;
		?>
</head>
<body>
	<div class="Container">
		<?php 
			switch($e){
				case 1:
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
				case 7:
					echo "Região Norte";
					break;
				case 8:
				case 9:
				case 10:
				case 11:
				case 12:
				case 13:
				case 14:
				case 15:
				case 16:
					echo "Região Nordeste";
					break;
				case 17:
				case 18:
				case 19:
				case 20:
					echo "Região Centro-Oeste";
					break;
				case 21:
				case 22:
				case 23:
				case 24:
					echo "Região Suldeste";
					break;
				case 25:
				case 26:
				case 27:
					echo "Região Sul";
					break;
				default:
					echo "Estado Não Informado";
			}
		?>
	</div>
		<a href="desafio.html">Voltar</a>	
</body>
</html>