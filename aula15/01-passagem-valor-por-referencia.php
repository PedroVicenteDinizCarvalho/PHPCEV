<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Função com passagem de parâmetro por Referência</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 	<?php
	 		function teste(&$x){
	 			$x+=2;
	 			echo "O valor de X é $x <br/>";
	 		}
	 	?>
</head>
<body>
	<div class="Container">
		<?php 
			$a=3;
			teste($a);
			echo "O valor de A é $a";
		?>
	</div>
</body>
</html>