<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Print_r PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$n=array("A", "J", "M", "X", "K");
			$tot=count($n);
		?>
</head>
<body>
	<div class="Container">
	<pre>
		<?php
			echo "O vetor tem $tot Elementos<br/>"; 
			print_r($n);
			var_dump($n);
		?>
	</pre>
	</div>	
</body>
</html>