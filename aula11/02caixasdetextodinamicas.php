<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Caixas de texto dinamicas com php integrado no formulário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="Container">
		<form method="get" action="02parte2.php">
			<?php
				$cont=1;
				while($cont<=5){
					echo "Valor $cont:<input type='number' name='v$cont' max='100' min='0' value='0'/><br/>";
					$cont+=1;
				}
			?>
					<input type="submit" value="Enviar" />
		</form>	
	</div>
</body>
</html>