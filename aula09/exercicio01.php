<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Maior Idade</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php
			$a=isset($_GET["ano"])?$_GET["ano"]:1900;
			$i=date("Y")-$a;
		?>
</head>
<body>
	<div class="Container">
		<?php
			echo "Você nasceu em $a <br/>";
			echo "E tem $i anos <br/>";
			if($i>=18){
				$v="Já pode Votar";
				$d="Já pode dirigir";
			}
			else{
				$v="Não pode votar";
				$d="Não pode dirigir";
			}
			echo "Com essa idade você $v <br/> e $d";
		?>
	</div>
		<a href="exercicio01.html">Voltar</a>
</body>
</html>