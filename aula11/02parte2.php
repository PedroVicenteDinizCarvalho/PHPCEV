<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Caixas de texto dinamicas com php integrado no formulário</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php
			$i=1;
			while($i<=5){
				$v="num".$i;
				$url="v".$i;
				$$v=isset($_GET["$url"])?$_GET["$url"]:0;
				$i+=1;
			}
			
			$i=1;
			while($i<=5){
				$v="num".$i;
				echo "Valor $i:".$$v."<br/>";
				$i+=1;
			}
		?>	
	</div>	
</body>
</html>