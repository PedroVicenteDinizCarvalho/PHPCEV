<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Range PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
	<pre>
		<?php 
			$n=range(5,20,2);
			foreach($n as $v){
				echo "$v ";
			}
		?>	
	</pre>
	</div>
</body>
</html>