<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Contador</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php 
		$cont=10;
	?>
</head>
<body>
	<div class="Container">
		<?php 
			do{
				echo "$cont ";
				$cont-=1;
			}while($cont>=1);
		?>
	</div>
</body>
</html>