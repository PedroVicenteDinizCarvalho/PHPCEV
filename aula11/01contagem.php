<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contagem com while</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$cont=10;
		?>
</head>
<body>
	<div class="Container">
		<?php 
			while($cont>=0){
				echo $cont;
				$cont-=2;
			}
		?>
	</div>	
</body>
</html>