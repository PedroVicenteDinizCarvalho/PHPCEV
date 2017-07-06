<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Implode PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$vetor[1]="Curso";
			$vetor[2]="em";
			$vetor[3]="Video";
			$texto=implode("#", $vetor);
			echo $texto;
		?>
	</div>
</body>
</html>