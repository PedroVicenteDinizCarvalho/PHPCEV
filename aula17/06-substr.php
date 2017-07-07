<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Substr PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$site="Curso em Vídeo";
			$sub=substr($site, 0,5);
			echo "$sub ";
		?>
	</div>
</body>
</html>