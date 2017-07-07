<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Strpos e Stripos PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$frase="Estou aprendendo PHP";
			$pos=strpos($frase, "PHP");
			echo "$frase <br/> A string foi encontrada na posição $pos";
			echo "<br/>";
			$pos2=stripos($frase, "php");
			echo "Mesmo php estando em caixa alta, com a função stripos conseguimos achar a posição que é $pos2";
		?>
	</div>	
</body>
</html>