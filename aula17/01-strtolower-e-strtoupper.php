<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Strtolower e Strtoupper PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$nome="Pedro Vicente";
			echo ("Seu nome é " .strtolower($nome));
			echo "<br/>";
			echo ("Seu nome é " .strtoupper($nome));
		?>
	</div>
</body>
</html>