<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Substr_count PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$frase="Estou aprendendo PHP no curso em vídeo de PHP";
			$cont=substr_count($frase, "PHP");
			echo "A frase tem PHP escrito: $cont vezes";
		?>
	</div>
</body>
</html>