<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Gerenciando inicio do Vetor PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$v=array("A", "J", "M", "X", "K");
		?>
</head>
<body>
	<div class="Container">
		<pre>
		<?php 
			print_r($v);
			array_unshift($v, "O");
			var_dump($v);
			array_shift($v);
			var_dump($v);
		?>
		</pre>
	</div>	
</body>
</html>