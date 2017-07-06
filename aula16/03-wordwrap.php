<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Wordwrap PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<?php 
			$t="Aqui tem um texto gigante feito pelo php para mostrar a função do wordwrap";
			$res=wordwrap($t, 5, "<br/>\n", true);
			echo $res;
		?>
	</div>	
</body>
</html>