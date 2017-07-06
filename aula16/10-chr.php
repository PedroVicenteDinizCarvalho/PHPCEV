<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Chr PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$letra=chr(67);
			echo "A letra de código 67 é $letra <br/>";
			$l="c";
			$cod=ord($l);
			echo "O código da letra $l é $cod";
		?>
	</div>
</body>
</html>