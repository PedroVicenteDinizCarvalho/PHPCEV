<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Print_r PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$x[1]=1;
			$x[2]=2;
			$x[3]=4;
			print_r($x);
			echo "<br/>";
			$v2=array(1,2,3,4,5,6,7);
			print_r($v2);
		?>
	</div>
</body>
</html>