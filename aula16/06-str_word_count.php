<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Str_word_count PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$frase="Eu vou estudar PHP agora";
			$cont=str_word_count($frase, 0);
			echo $cont;
			echo "<br/>";
			$cont=str_word_count($frase, 1);
			print_r($cont);
			echo "<br/>";
			$cont=str_word_count($frase, 2);
			print_r($cont);
		?>
	</div>	
</body>
</html>