<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Média na escola</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php
			$nota1=$_GET["n1"];
			$nota2=$_GET["n2"];
			$m=($nota1+$nota2)/2;
			echo "A media entre $nota1 e $nota2 é $m <br/>";
			echo "O aluno foi ". ($m<6?"Reprovado":"Aprovado");
		?>
	</div>	
</body>
</html>