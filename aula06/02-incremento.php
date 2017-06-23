<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Incremento</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="Container">
	<?php
		$atual = $_GET["aa"];
		echo "O ano atual é $atual e o ano anterior é " . --$atual;
	?>
</div>	
</body>
</html>