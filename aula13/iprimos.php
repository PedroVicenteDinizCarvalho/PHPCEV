<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Numeros primos com PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php 
			$n=isset($_GET["valor"])?$_GET["valor"]:1;
			$mult=0;
		?>
</head>
<body>
	<div class="Container">
		<?php
			echo "Analisando o número $n <br/>";
			echo "Valores Multiplos: ";
			for($c=1;$c<=$n;$c+=1){
				if($n%$c==0){
					$mult+=1;
					echo "$c ";
				}
			}
			echo "<br/>";
			echo "Total de múltiplos: $mult <br/>";
			echo "Resultado: $n";
			if($mult<=2){
				echo " É Primo!";
			}
			else{
				echo " Não é Primo";
			}
		?>
	</div>
		<a href="desafionumerosprimos.html">Voltar</a>
</body>
</html>