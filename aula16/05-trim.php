<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Trim PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$nome="   Pedro Vicente Diniz Carvalho   ";
			echo "Tamanho da string com os espaços desnecessários: ";
			echo (strlen($nome));
			echo "<br/>";
			$novo=trim($nome);
			echo "Tamanho da string com o corte feito pela função trim:  ";
			echo (strlen($novo));
			echo "<br/>";
			echo "string analisada: $nome";
		?>
	</div>
</body>
</html>