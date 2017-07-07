<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Matriz PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<pre>
			<?php 
				$m=array(array(6,4), array(4,9), array(3,2));
				$m[0] [1]=$m[2] [0];
				print_r($m );
			?>
		</pre>
	</div>
</body>
</html>