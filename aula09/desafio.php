<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Consulta Escolar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<?php
			$nome=isset($_GET["nome"])?$_GET["nome"]:"Nome não Informado";
			$n1=isset($_GET["n1"])?$_GET["n1"]:"Nota não Informada";
			$n2=isset($_GET["n2"])?$_GET["n2"]:"Nota 2 não Informada";
			$m=($n1+$n2)/2;
		?>
</head>
<body>
	<div class="Container">
		<?php
			echo "$nome Olá! Seja bem vindo a consulta escolar <br/>";
			echo "Sua primeira nota foi $n1 e a segunda foi $n2 <br/>";
			echo "Dessa forma você obteve uma média de $m <br/>";
			if($m<5){
				$r="REPROVADO";
			}
			elseif($m>=5 && $m<=7){
				$r="RECUPERAÇÃO";
			}
			else{
				$r="APROVADO";
			}
			echo "$nome sua situação é $r";
		?>
	</div>
	<a href="desafio.html">Voltar</a>	
</body>
</html>