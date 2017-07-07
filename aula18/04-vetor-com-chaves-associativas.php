<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vetor com Chaves Associativas PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div class="Container">
		<?php 
			$v=array("nome"=>"Ana", "idade"=>23, "peso"=>65.5);
			$v["fuma"]=true;
			print_r($v );
			echo "<br/>";
			foreach($v as $campo=>$valor){
				echo "O valor de $campo é $valor <br/>";
			}
		?>
	</div>	
</body>
</html>