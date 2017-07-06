<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Explode PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$site="Curso em Video";
			$vetor=explode(" ", $site);
			print_r($vetor);
		?>
	</div>
</body>
</html>